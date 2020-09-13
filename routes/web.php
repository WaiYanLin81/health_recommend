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

// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::get('/','ShowController@indexfun')->name('index');
Route::get('/loginpage','ShowController@loginfun')->name('loginpage');
Route::get('/registerpage','ShowController@registerfun')->name('registerpage');


Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
