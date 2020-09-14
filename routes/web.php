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
Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
Route::resource('diseases','DiseaseController');
Route::resource('posts','PostController');
});

<<<<<<< HEAD


Route::get('/blog','ShowController@blogfun')->name('blogpage');
Route::get('/blogdetail','ShowController@blogdetailfun')->name('blogdetailpage');
=======

Route::get('/blog','ShowController@blogfun')->name('blogpage');

>>>>>>> 5b6db2080b9052c2091d0fe7547df242c9dce1f6

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


// Route::get('/','ShowController@indexfun')->name('index');
// Route::get('/login','ShowController@loginfun')->name('login');
// Route::get('/register','ShowController@registerfun')->name('register');



<<<<<<< HEAD
=======

>>>>>>> 5b6db2080b9052c2091d0fe7547df242c9dce1f6
Route::get('/','ShowController@indexfun')->name('index');
Route::get('/loginpage','ShowController@loginfun')->name('loginpage');
Route::get('/registerpage','ShowController@registerfun')->name('registerpage');

Route::get('/detailpage/{id}','ShowController@detailfun')->name('detailpage');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


