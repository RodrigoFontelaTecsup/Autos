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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return "Pagina principal";
});

Route::get('home/catalogo/{auto}', function($auto){
    return "Catalogo del auto $auto";
});

Route::get('home/promociones', function(){
    return 'promociones';
});

Route::get('home/venta_compra', function(){
    return 'Venta_compra';
});

Route::get('home/mantenimiento', function(){
    return 'mantenimiento';
});

Route::get('home/alquiler', function(){
    return 'alquiler';
});












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
