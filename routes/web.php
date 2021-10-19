<?php

use Illuminate\Support\Facades\Route;

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


$router->get('aseguradora', 'AseguradoraController@ImportarDatosAseguradora');
$router->get('autonomi', 'Controller@EjecutarAutonomi');
$router->get('mascotasBP', 'Controller@EjecutarMascotasBP');
$router->get('integral', 'Controller@EjecutarIntegral');
$router->get('sagrario', 'Controller@EjecutarSagrario');
$router->get('sagrarioh', 'Controller@EjecutarSagrarioHijos');
$router->get('linkmatic', 'Controller@EjecutarLinkmatic');
$router->get('autofenix', 'Controller@EjecutarAutoFenix');
$router->get('equinorte', 'Controller@EjecutarEquinorte');
$router->get('hyunmotor', 'Controller@EjecutarHyunmotor');
$router->get('vallejoaraujo', 'Controller@EjecutarVallejoAraujo');
$router->get('palig', 'Controller@EjecutarPalig');
//$router->get('vehiculos', 'VehiculosController@ImportarDatos');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
