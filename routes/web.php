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

<<<<<<< HEAD

Route::get('/','ShowController@indexfun')->name('index');
Route::get('/login','ShowController@loginfun')->name('login');
Route::get('/register','ShowController@registerfun')->name('register');
=======
Route::get('/','ShowController@indexfun')->name('index');
Route::get('/loginpage','ShowController@loginfun')->name('loginpage');
Route::get('/registerpage','ShowController@registerfun')->name('registerpage');
>>>>>>> 43f9a0b19863de9182fd7d6d87b1a50934ce5a6c


Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
