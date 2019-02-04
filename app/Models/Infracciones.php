<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Infracciones extends Model
{

    protected $primaryKey = "id";
    protected $table = "infracciones";
    public $timestamps = true;

    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }


    public function getTipo(){
        return DB::table("tipoDeInfracciones")->where("estado","=","1")->get();
    }

    public function register($data){
        return $this->db->insertGetId($data);
    }

    public function registerTipo($data){
        return DB::table("tipoDeInfracciones")->insertGetId($data);
    }

    public function deleteInfraccion($id){
        $this->db->where("id","=",$id)->update(["estado"=>1]);
        return true;
    }

    public function deleteTipo($id){
        DB::table("tipoDeInfracciones")->where("id","=",$id)->update(["estado"=>0]);
        return true;
    }


    public function updateTipo($id,$data = []){
        return DB::table("tipoDeInfracciones")->where(compact("id"))->update($data);
    }
}
