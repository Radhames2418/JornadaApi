<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;


//Funciones de apoyo
require_once __DIR__ . '/../includes/app.php';


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//API DEL MODELO RESIDENTES
Route::get('/residentes', [APIController::class, 'index']);
Route::get('/residentes/{residente}', [APIController::class, 'show']);
Route::post('/residentes', [APIController::class, 'store']);
Route::put('/residentes/{residente}', [APIController::class, 'update']);
Route::delete('/residentes/{residente}', [APIController::class, 'destroy']);


//CONSULTAR UN MODELO ESPECIFICO
Route::get('/nombre/{nombre}', [APIController::class, 'name']);
Route::get('/correo/{correo}', [APIController::class, 'email']);


//FILTRAR MODELOS EN ESPECIFICO
Route::get('/letra/{letra}', [APIController::class, 'filter']);
Route::get('/edad/{edad}', [APIController::class, 'down']);

//PAGINADOR DE LAS PAGINAS
Route::get('/pagina/{pagina}', [APIController::class, 'paginado']);
