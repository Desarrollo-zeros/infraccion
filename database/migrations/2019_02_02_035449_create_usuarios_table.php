<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('password', 255);
            $table->string('email', 100);
            $table->string('nombreCompleto', 100);
            $table->string('rol', 1)->default(1);
            $table->timestamps();

        });

        Schema::create('personas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 11);
            $table->string('licencia', 20);
            $table->string('primerNombre', 20);
            $table->string('segundoNombre', 20)->nullable();
            $table->string('primerApellido', 20);
            $table->string('segundoApellido', 20);
            $table->timestamps();

        });

        Schema::create('TipoVehiculo', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipoVehiculo', 20);
        });

        Schema::create('vehiculos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('placa', 20);
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->string('tipoServicio', 100);
            $table->unsignedInteger('idTipoVehiculo');
            $table->foreign('idTipoVehiculo')->references('id')->on('TipoVehiculo');
            $table->timestamps();
        });


        Schema::create('departamentos', function(Blueprint $table) {
            $table->increments('id');
            $table->string("departamento");
        });

        Schema::create('municipios', function(Blueprint $table) {
            $table->increments('id');
            $table->string("municipio");
            $table->integer("estado");
            $table->unsignedInteger("idDepartamento");
            $table->foreign('idDepartamento')->references('id')->on('departamentos');
        });

        Schema::create('tipoDeInfracciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string("codigo");
            $table->string("nombre");
            $table->string("detalle");
            $table->integer("estado");
        });

        Schema::create('infracciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string("codigo");
            $table->timestamp("fechaMulta");
            $table->string("latitud");
            $table->string("longitud");
            $table->float("multa");
            $table->unsignedInteger("idMunicipio");
            $table->unsignedInteger("idPersona");
            $table->unsignedInteger("idVehiculo");
            $table->unsignedInteger("idAgenteMulta");
            $table->unsignedInteger("idTipoDeInfraccion");
            $table->integer("estado");
            $table->foreign('idPersona')->references('id')->on('personas');
            $table->foreign('idVehiculo')->references('id')->on('vehiculos');
            $table->foreign('idAgenteMulta')->references('id')->on('usuarios');
            $table->foreign('idMunicipio')->references('id')->on('municipios');
            $table->foreign('idTipoDeInfraccion')->references('id')->on('tipoDeInfracciones');
            $table->timestamps();
        });

        Schema::create('pagoInfracciones', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("idInfraccion");
            $table->foreign('idInfraccion')->references('id')->on('infracciones');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
        Schema::drop('personas');
        Schema::drop('vehiculos');
        Schema::drop('TipoVehiculo');
        Schema::drop('ciudades');
        Schema::drop('departamentos');
        Schema::drop('infracciones');
        Schema::drop('pagoInfracciones');

    }
}