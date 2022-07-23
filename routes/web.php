<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\VentaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/prendas/registrar", [PrendaController::class, "registrar"])->name("prendas.registrar");
Route::post("/prendas/registrar", [PrendaController::class, "registrarProcesar"])->name("prendas.registrar");

Route::post("/ventas/dia", [VentaController::class, "ventasPorDia"])->name("ventas.dia");
Route::get("/ventas/dia", [VentaController::class, "showVentas"])->name("ventas.dia");
