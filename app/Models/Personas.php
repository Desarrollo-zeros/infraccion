<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personas extends Model
{

    protected $primaryKey = "id";
    protected $fillable = ["cedula","licencia","primerNombre","segundoNombre","primerApellido","segundoApellido","telefono"];
    protected $table = "personas";
    public $timestamps = true;

    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    //select p.primerNombre, p.PrimerApellido, i.multa from personas p inner join infraccion i on p.id = i.id where $key = $value
    public function getInfo($key = "", $value = ""){

        $colum = [
            "idPersona","primerNombre","primerApellido",
            "multa","cedula","licencia","fechaMulta",
            "latitud","longitud","nombreCompleto","rol","infracciones.codigo","infracciones.estado","infracciones.id","placa", "nombre"];

        if($key == "codigo"){
            $key = "infracciones.".$key;
        }


        $data = $this->db
            ->join("infracciones","infracciones.idPersona","=","personas.id")
            ->join("vehiculos","infracciones.idVehiculo","=","vehiculos.id")
            ->join("usuarios","infracciones.idAgenteMulta","=","usuarios.id")
            ->join("tipoDeInfracciones","infracciones.idTipoDeInfraccion","=","tipoDeInfracciones.id")
            ->select($colum)
            ->where($key,$value)
            ->get();
        return $data->count() > 0 ? $data->all() : false;
    }


    public function register($data){
        return $this->db->insertGetId($data);
    }

    public function getAll(){
        $colum = [
            "idPersona","primerNombre","primerApellido",
            "multa","cedula","licencia","fechaMulta",
            "latitud","longitud","nombreCompleto","rol","infracciones.codigo","infracciones.estado","infracciones.id","placa", "nombre"];

        $data = $this->db
            ->join("infracciones","infracciones.idPersona","=","personas.id")
            ->join("vehiculos","infracciones.idVehiculo","=","vehiculos.id")
            ->join("usuarios","infracciones.idAgenteMulta","=","usuarios.id")
            ->join("tipoDeInfracciones","infracciones.idTipoDeInfraccion","=","tipoDeInfracciones.id")
            ->where("infracciones.estado","=","0")
            ->select($colum)
            ->get();
        return $data->count() > 0 ? $data->all() : false;
    }


    public function getId($cedula){
        return $this->db->where(compact("cedula"))->select("id")->get()->toArray()[0];
    }


}

