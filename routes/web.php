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



Route::get('/form', function () {
    return view('update');
});

Route::post('/insert','Show@insert');
Route::get('/show','Show@show');

Route::get('/edit/{id}','Show@edit');
Route::post('/edit/update/{id}','Show@update');
Route::get('/delete/{id}','Show@delete');
