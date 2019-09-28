<?php

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
Route::get('/cuaca2', 'KontrolerCuaca@index');
// Route::get('/cuaca2', 'KontrolerYutub@index');

Route::get('/anime', function () {
    return view('anime');
});

// Route::get('/cuaca1', function () {
//     return view('cuaca1');
// });
Route::get('/cuaca', function () {
    return view('cuaca');
});

Route::get('/cuaca1', 'KontrolerCuaca1@index');