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
Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');
=======

>>>>>>> 4109a618662ff3532b5bac2fd41a61a25b09e559
