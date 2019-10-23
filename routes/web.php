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

Route::get('/cuaca2', 'KontrolerCuaca@index')->middleware('auth');
// Route::get('/cuaca2', 'KontrolerYutub@index');

Route::get('/film', function () {
    return view('film');
})->middleware('auth');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//default route dari laravel
// Route::get('login/github', 'Auth\LoginController@redirectToProvider');
// Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('auth/github', 'Auth\LoginController@redirectToProvider');
// Route::get('auth/github/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
