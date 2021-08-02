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

Route::get('/Jean', function () {
    $drago = "<h2>Deb</h2>";
    return $drago;
})->name("Jean");


Route::get('/sad/{id}', function ($id) {

    return view('welcome', compact('id'));
})->name("Variable");

Route::get('/okay', function () {
    $var1 = 2;
    $var2 = "Esteban";
    return view('newview', compact('var1', "var2"));
})->name("Variability");
