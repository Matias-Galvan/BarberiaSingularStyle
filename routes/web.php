<?php

use App\Models\Turno;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Cuenta', function () {
    return view('cliente.cuenta');
});
Route::get('/Perfil', function () {
    return view('cliente.perfil');
});
Route::get('/Nosotros', function () {
    return view('home.sobrenosotros');
});
Route::get('/Calendario', function () {
    return view('admin.calendario');
});

Route::resource('admin/barberos', '\App\Http\Controllers\BarberoController');
Route::resource('admin/turnos', '\App\Http\Controllers\TurnoController');
Route::resource('admin/serviciosPrestados', '\App\Http\Controllers\BarberoTurnoCliente');
Route::resource('admin/servicios', '\App\Http\Controllers\ServicioController');
Route::resource('admin', '\App\Http\Controllers\ClienteController');
Route::resource('home', '\App\Http\Controllers\HomeController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
