<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Crud');
});

Route::get('/clientes',[ClienteController::class,'index'])->name('clientes');
Route::post('/clientes',[ClientesContrller::class,'store']);
//routes Registro
// Route::get('/registro',[RegistroController::class,'index'])->name('registro');
// Route::post('/registro',[RegistroController::class,'store']);