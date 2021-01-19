<?php

use App\Http\Controllers\CaraterizacionEstudianteController;
use App\Http\Controllers\RetoController;
use App\Http\Controllers\RetosCumplidosController;
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

/* URL::forceScheme('https'); */


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('retos', RetoController::class)->names('retos');

Route::resource('retocumplido', RetosCumplidosController::class)->names('retocumplido');

Route::resource('caracterizacion', CaraterizacionEstudianteController::class)->names('caracterizacion');


