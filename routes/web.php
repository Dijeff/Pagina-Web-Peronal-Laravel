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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'App\Http\Controllers\PoratafolioController@index')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessajesController@store');
//Route::resource('projects','App\Http\Controllers\PoratafolioController');

/*
$nombre = "Jorge";
Route::view('/', 'home', compact('nombre'));


Route::get('/', function () {
  
    return view('home', compact('nombre'));
})->name('home');

Route::get('contactanos', function () {
    return "Sección de contacto";
})->name('contactos');

Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "contacto" . $nombre;
});*/
