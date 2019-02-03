<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usurios extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["username","password","email","nombreCompleto","rol"];
    protected $table = "usuarios";
    public $timestamps = true;

    private  $db = null;

    public function __construct()
    {
        parent::__construct();

        $this->db = DB::table($this->table);
    }

    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username, $password){
       $data = $this->db->where(compact("username"))->where(compact("password"))->get();

       if($data->count() > 0){
           session()->put("users",$data->all());
           return ["status"=>true,"success"=>"Usuario existe","error"=>""];
       }else{
           return ["status"=>false,"success"=>"","error"=>"Usuario o Contraseña incorrecto"];
       }
    }


    public function findUsers(){
        return $this->db->select("*")->where("id","<>",session()->get("users")[0]->id)->get();
    }

    public function deleteUsers($id){
        $this->db->where("id","=",$id)->delete();
        return $this->findUsers();
    }
    /**
     * @param array $data
     * @return bool
     */
    public function register($data = []){
        return $this->fill($data)->save();
    }


}
