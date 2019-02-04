<?php

namespace App\Http\Controllers;

use App\Models\Infracciones;
use App\Models\Usurios;
use App\Models\Personas;
use App\Models\Vehiculos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class infraccion extends Controller
{

    public function index(){
        $data = [];
        if(session()->has("users")){
            $data = session()->get("users")[0];
        }
        return view("index")->with(compact("data"));
    }

    public function login(Request $request, Usurios $usurios){
        $username = $request->post("username");
        $password = $request->post("password");
        if(isset($username) && isset($password) && strlen($username)>3  && strlen($password)>3){
            return response()->json($usurios->login(strtolower($username),strtolower(sha1($password))));
        }else{
            return response()->json(["status"=>false,"error"=>"no puede haber campos vacios| usuario o la contraseña deben ser mayores que 3 digistros","success"=>""]);
        }
    }

    public function register(Request $request, Usurios $usurios){

    }

    public function getInfo(Request $request, Personas $personas){
        if(!empty($request->post("cedula"))){
            return response()->json($personas->getInfo("cedula",$request->post("cedula")));
        }
        if(!empty($request->post("placa"))){
            return response()->json($personas->getInfo("placa",$request->post("placa")));
        }
        if(!empty($request->post("codigo"))){
            return response()->json($personas->getInfo("codigo",$request->post("codigo")));
        }else{
            return response()->json([]);
        }
    }


    /*Panel Control*/

    public function panel(Infracciones $infracciones){

        if(session()->has("users")){
            $data = session()->get("users")[0];
            if($data->rol > 0){
                $infraccion = $infracciones->getTipo();
                return view("panel")->with(compact("data"))->with(compact("infraccion"));
            }else{
                return redirect("/");
            }
        }else{
            return redirect("/");
        }
    }

    public function getData(Request $request, Personas $personas, $cedula){
        $data = $personas->getInfo("cedula",$cedula);
        return view("panelInfraccion")->with(compact("data"),compact(""));
    }

    public function test(Request $request, Personas $personas, $cedula = "1234567891"){
        $data = $personas->getInfo("cedula",$cedula);
        return response()->json($data);
    }



    public function registerUsers(Request $request, Usurios $usurios){
        $data = [
            "username" => $request->post("username"),
            "password"=> sha1($request->post("password1")),
            "email" => $request->post("email"),
            "rol" => $request->post("rol"),
            "nombreCompleto" => $request->post("nombreCompleto")
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:usuarios|max:255',
            'email' => 'required|unique:usuarios|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages()->all());
        }

        return ($usurios->register($data)) ? response()->json($usurios->findUsers()) : ["status"=>false];
     }

    /*Panel Control*/

    public function findUsers(Usurios $usurios){
        return response()->json($usurios->findUsers());
    }

    public function deleteUsers(Request $request,Usurios $usurios){
        return response()->json($usurios->deleteUsers($request->post("id")));
    }

    public function registerPersons(Request $request, Personas $personas, Vehiculos $vehiculos, Infracciones $infracciones){

        $pesons  = [
            "cedula" => $request->post("cedula"),
            "licencia" => $request->post("licencia"),
            "primerApellido"=> $request->post("primerApellido"),
            "primerNombre"=>  $request->post("primerNombre"),
            "segundoApellido"=> $request->post("segundoApellido"),
            "segundoNombre"=> $request->post("segundoNombre"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ];

        $validator = Validator::make($pesons, [
            'cedula' => 'required|unique:personas|max:255',
        ]);

        if ($validator->fails()) {
            $idPerson = $personas->getId($pesons["cedula"])->id;
        }else{
            $idPerson = $personas->register($pesons);
        }

        $vehiculo = [
            "marca"=> $request->post("marca"),
            "modelo"=> $request->post("modelo"),
            "placa"=> $request->post("placa"),
            "tipoServicio" =>"personal",
            "idTipoVehiculo" => 1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ];

        $idVehiculo = $vehiculos->register($vehiculo);

        $infraccion = [
            "codigo" => $this->generateRandomString(),
            "fechaMulta" => Carbon::now(),
            "multa"=> $request->post("multa"),
            "latitud" => $request->post("latitud"),
            "longitud" => $request->post("longitud"),
            "idMunicipio" => 1042,
            "idPersona" => $idPerson,
            "idVehiculo" => $idVehiculo,
            "idAgenteMulta" => session()->get("users")[0]->id,
            "estado" => 0,
            "idTipoDeInfraccion" => $request->post("tipoInfraccion"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ];

        $id = $infracciones->register($infraccion);
        if(isset($id)){
            return response()->json($personas->getAll());
        }else{
            return response()->json();
        }
    }

    public function setEnvironmentValue(array $values)
    {

        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {

                $str .= "\n"; // In case the searched variable is in the last line without \n
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                // If key does not exist, add it
                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }

            }
        }

        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;

    }

    function generateRandomString($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getPersons(Personas $personas){
        return response()->json($personas->getAll());
    }

    public function deleteInfraccion(Request $request, Infracciones $infracciones){
        return response()->json($infracciones->deleteInfraccion($request->post("id")));
    }

    public function registrerTipoInfraccion(Request $request, Infracciones $infracciones){


        $data = [
            "codigo" => $request->post("codigo"),
            "nombre" => $request->post("nombre"),
            "detalle" => $request->post("detalle"),
            "estado" => 1
        ];

         if($request->post("registrar") == "si"){
            $id = $infracciones->registerTipo($data);
            if(isset($id)){
                return response()->json($infracciones->getTipo());
            }
        }else{
            $infracciones->updateTipo($request->post("id"),$data);
            return response()->json($infracciones->getTipo());
        }
    }

    public function getTipo(Infracciones $infracciones){
        return response()->json($infracciones->getTipo());
    }

    public function deleteTipo(Request $request, Infracciones $infracciones){
        $id = $request->post("id");
        $infracciones->deleteTipo($id);
        return response()->json($infracciones->getTipo());
    }

}
