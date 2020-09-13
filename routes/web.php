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
=======

>>>>>>> bb8145b54abc33af465d04baa14bb779e34a4b61

Route::get('/','ShowController@indexfun')->name('index');
Route::get('/login','ShowController@loginfun')->name('login');
Route::get('/register','ShowController@registerfun')->name('register');

Route::get('/','ShowController@indexfun')->name('index');
Route::get('/loginpage','ShowController@loginfun')->name('loginpage');
Route::get('/registerpage','ShowController@registerfun')->name('registerpage');
<<<<<<< HEAD

=======
Route::get('/detailpage/{id}','ShowController@detailfun')->name('detailpage');
>>>>>>> bb8145b54abc33af465d04baa14bb779e34a4b61


Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


