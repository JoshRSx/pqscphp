<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'inicio']);  
Route::get('/elcomercio', [HomeController::class, 'elcom']);  
Route::get('/gestion', [HomeController::class, 'gest']);
Route::get('/peru21', [HomeController::class, 'peru21']);    
Route::get('/ojo', [HomeController::class, 'ojo']);   
Route::get('/correo', [HomeController::class, 'correo']);
Route::get('/depor', [HomeController::class, 'depor']);  
Route::get('/trome', [HomeController::class, 'trome']);      



//Regional

Route::get('/correo-arequipa', [HomeController::class, 'correoArequipa']);
Route::get('/correo-ayacucho', [HomeController::class, 'correoAyacucho']);
Route::get('/correo-chimbote', [HomeController::class, 'correoChimbote']);
Route::get('/correo-huancavelica', [HomeController::class, 'correoHuancavelica']);
Route::get('/correo-huancayo', [HomeController::class, 'correoHuancayo']);
Route::get('/correo-huanuco', [HomeController::class, 'correoHuanuco']);
Route::get('/correo-ica', [HomeController::class, 'correoIca']);
Route::get('/correo-lalibertad', [HomeController::class, 'correoLaLibertad']);
Route::get('/correo-lambayeque', [HomeController::class, 'correoLambayeque']);
Route::get('/correo-piura', [HomeController::class, 'correoPiura']);
Route::get('/correo-puno', [HomeController::class, 'correoPuno']);
Route::get('/correo-tacna', [HomeController::class, 'correoTacna']);
Route::get('/correo-tumbes', [HomeController::class, 'correoTumbes']);

Route::get('/ojo-centro', [HomeController::class, 'ojoCentro']);
Route::get('/ojo-norte', [HomeController::class, 'ojoNorte']);      
Route::get('/ojo-sur', [HomeController::class, 'ojoSur']);   

Route::get('/depor-centro', [HomeController::class, 'deporCentro']);   
Route::get('/depor-norte', [HomeController::class, 'deporNorte']);   
Route::get('/depor-sur', [HomeController::class, 'deporSur']);   