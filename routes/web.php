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
Route::middleware('role:Admin')->group(function(){
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
});

<<<<<<< HEAD

Route::get('/blog','ShowController@blogfun')->name('blogpage');
=======

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::get('/','ShowController@indexfun')->name('index');
Route::get('/login','ShowController@loginfun')->name('login');
Route::get('/register','ShowController@registerfun')->name('register');


>>>>>>> fba0a6b5560c613ffb8f7280e2b4adaaeb2d4442
Route::get('/','ShowController@indexfun')->name('index');
Route::get('/loginpage','ShowController@loginfun')->name('loginpage');
Route::get('/registerpage','ShowController@registerfun')->name('registerpage');

Route::get('/detailpage/{id}','ShowController@detailfun')->name('detailpage');



Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');
Route::resource('posts','PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


