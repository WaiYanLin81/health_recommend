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



// frondend
Route::get('/blog','ShowController@blogfun')->name('blogpage');

Route::get('/blogdetail/{id}','ShowController@blogdetailfun')->name('blogdetailpage');

Route::get('/','ShowController@indexfun')->name('index');

Route::get('/loginpage','ShowController@loginfun')->name('loginpage');

Route::get('/registerpage','ShowController@registerfun')->name('registerpage');

Route::get('/detailpage/{id}','ShowController@productdetailfun')->name('productdetailpage');

Route::get('/disease/{id}','ShowController@diseasedetailfun')->name('diseasedetailpage');



Route::get('/fruitspage/{id}','ShowController@fruitsfun')->name('fruitspage');

Route::get('/diseasepage','ShowController@diseasefun')->name('diseasepage');

Route::get('/diseasedetail/{id}','ShowController@diseasedetailfun')->name('diseasedetailpage');

Route::get('/searchproduct','ShowController@productsearchpage')->name('productsearchpage');
Route::get('/contact','ShowController@contactfun')->name('contactpage');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Example route
Route::get('testing','TestController@testfun')->name('testpage');

Route::post('/comments/add','CommentController@create');
Route::get('/comments/delete/{id}','CommentController@delete');