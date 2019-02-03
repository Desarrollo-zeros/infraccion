<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculos extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["placa","marca","modelo","tipoServicio","idTipoVehiculo"];
    protected $table = "vehiculos";
    public $timestamps = true;

    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function register($data){
        return $this->db->insertGetId($data);
    }

}
