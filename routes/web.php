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

Route::get('/',function (){
    return(view('Home'));
});

Route::view('/QuienesSomos','QuienesSomos')->name('QuienesSomos');

Route::get('planes','planController@index')->name("planes.index");
Route::get("planes/crea","planController@create")->name("planes.create");
Route::post("planes","planController@store")->name("planes.store");
Route::get("planes/{id}/edit","planController@edit")->name("planes.edit");
Route::put("planes/{id}","planController@update")->name("planes.update");
Route::get("planes/delete/{id}","planController@delete")->name("planes.delete");
Route::delete("planes/{id}","planController@destroy")->name("planes.destroy");

// Personas
Route::resource("personas","personaController");
Route::get("personas/delete/{persona}","personaController@delete")->name("personas.delete");