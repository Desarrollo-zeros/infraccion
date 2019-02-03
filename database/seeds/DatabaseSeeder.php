<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usuarios")->insert(
            [
                "username"=>"zeros",
                "password" => sha1("toor"),
                "email" => "wowzeros2@gmail.com",
                "nombreCompleto" => "test test test test",
                "rol" => 3
            ]
        );

        DB::table("personas")->insert([
           "cedula" => "1234567891",
           "licencia" => "1234567891",
           "primerNombre" => "test",
           "segundoNombre" => "test",
           "primerApellido" => "test",
           "segundoApellido" => "test",
        ]);

        DB::table("tipoDeInfracciones")->insert([
           "id" => 1,
           "codigo" => "0001",
           "nombre" => "ley test",
           "detalle" => "test",
            "estado" => 1
        ]);

        $departamento = [
            5=>'ANTIOQUIA',
            8=>'ATLÁNTICO',
            11=>'BOGOTÁ, D.C.',
            13=>'BOLÍVAR',
            15=>'BOYACÁ',
            17=>'CALDAS',
            18=>'CAQUETÁ',
            19=>'CAUCA',
            20=>'CESAR',
            23=>'CÓRDOBA',
            25=>'CUNDINAMARCA',
            27=>'CHOCÓ',
            41=>'HUILA',
            44=>'LA GUAJIRA',
            47=>'MAGDALENA',
            50=>'META',
            52=>'NARIÑO',
            54=>'NORTE DE SANTANDER',
            63=>'QUINDIO',
            66=>'RISARALDA',
            68=>'SANTANDER',
            70=>'SUCRE',
            73=>'TOLIMA',
            76=>'VALLE DEL CAUCA',
            81=>'ARAUCA',
            85=>'CASANARE',
            86=>'PUTUMAYO',
            88=>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA',
            91=>'AMAZONAS',
            94=>'GUAINÍA',
            95=>'GUAVIARE',
            97=>'VAUPÉS',
            99=>'VICHADA'];

        foreach ($departamento as $key => $value){
            DB::table("departamentos")->insert(["id"=>$key,"departamento"=>$value]);
        }

        DB::table("municipios")->insert(["id"=>"1042","municipio"=>"Valledupar","estado"=>"1","idDepartamento"=>20]);


        DB::table("TipoVehiculo")->insert(["tipoVehiculo"=>"carro"]);
        DB::table("TipoVehiculo")->insert(["tipoVehiculo"=>"moto"]);


        DB::table("vehiculos")->insert(["placa"=>"ABC-123","marca"=>"Mazda","modelo"=>"1997","tipoServicio"=>"personal","idTipoVehiculo"=>1]);

        $time = \Carbon\Carbon::now();


        DB::table("infracciones")
            ->insert([
                "codigo" => "1234567891",
                "fechaMulta" => $time,
                "latitud" => "9.9675274",
                "longitud" => "-73.88307",
                "multa" => "100000",
                "idMunicipio" => "1042",
                "idPersona" => 1,
                "idVehiculo" => 1,
                "idAgenteMulta" => 1,
                "estado" => 0,
                "idTipoDeInfraccion" => 1
            ]);

        DB::table("pagoInfracciones")->insert(["idInfraccion"=>1,"created_at"=>$time,"updated_at"=>$time]);
    }
}
