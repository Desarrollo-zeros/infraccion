<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Infraccion@index');

Route::post("/login","Infraccion@login");


Route::get("/register","Infraccion@register");

Route::get("/cerrar",function (){
    session()->forget('users');
    return redirect("/");
});


Route::post("/getInfo","Infraccion@getInfo");


Route::get("/test","Infraccion@test");
Route::get("/panelInfraccion/{cedula}","Infraccion@getData");

Route::get("/mapa/",function (){
   return view("mapa");
});



Route::post("/findUsers","Infraccion@findUsers");

Route::post("/deleteUsers","Infraccion@deleteUsers");

Route::post("/registerUsers","Infraccion@registerUsers");

Route::post("/registerPersons","Infraccion@registerPersons");
Route::post("/getPersons","Infraccion@getPersons");
Route::post("/deleteInfraccion","Infraccion@deleteInfraccion");
Route::post("/getTipo","Infraccion@getTipo");
Route::post("/deleteTipo","Infraccion@deleteTipo");

Route::post("registrerTipoInfraccion","Infraccion@registrerTipoInfraccion");
Route::get("/panel","Infraccion@panel");