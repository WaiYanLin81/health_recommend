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

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
<<<<<<< HEAD
Route::get('/','ShowController@indexfun')->name('index');
Route::get('/login','ShowController@loginfun')->name('login');
Route::get('/register','ShowController@registerfun')->name('register');
=======

Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');

>>>>>>> b2acec5a069affb2627f3cd310d505a1d4d22e8e
