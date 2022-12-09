<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RegistrosController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

/*------------------------ Rutas del Pagina de Presencia --------------------------*/
Route::resource('/', App\Http\Controllers\InicioController::class);
Route::resource('/inicio', App\Http\Controllers\InicioController::class);
//Route::name('inicio')->get('index', [LoginController::class, 'login']);

/*-------------------------------- Rutas del Login --------------------------------*/

Route::name('login')->get('login', [LoginController::class, 'login']);
Route::name('valida')->post('valida', [LoginController::class, 'valida']);
Route::name('logout')->get('logout', [LoginController::class, 'logout']);

/*-------------------------------- Rutas de Usuarios --------------------------------*/

//Route::name('usuarios')->get('index', [LoginController::class, 'usuarios']);
Route::resource('/usuarios', App\Http\Controllers\UsuariosController::class);
Route::name('modificarfile')->get('edit/{id}', [LoginController::class, 'edit']);
Route::name('modificar')->put('update/{id}', [LoginController::class, 'update']);


/*-------------------------------- Rutas de Niveles --------------------------------*/

Route::resource('/niveles', App\Http\Controllers\NivelesController::class);

/*-------------------------------- Rutas de Catalogo --------------------------------*/

Route::resource('/catalogo', App\Http\Controllers\CatalogoController::class);

/*-------------------------------- Rutas de Ventas --------------------------------*/

Route::resource('/ventas', App\Http\Controllers\VentasController::class);

/*-------------------------------- Rutas de Productos --------------------------------*/

Route::resource('/productos', App\Http\Controllers\ProductosController::class);

/*-------------------------------- Rutas de Registros --------------------------------*/

Route::resource('/registros', App\Http\Controllers\RegistrosController::class);