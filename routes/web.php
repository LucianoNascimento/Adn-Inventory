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

Route::get('/','HomeCtrl@index');
Route::resource('/category','CategoryCtrl');
Route::resource('/customer','CustomerController');
Route::resource('/product','ProductController');
Route::resource('/expences','ExpencesController');
Route::resource('/suppliers','SupplierController');
Route::resource('/purches','PurchesController');


/*Route::get('delete/{id}','CategoryCtrl@destroy');
Route::get('delete/{id}','CustomerController@destroy');
Route::get('delete/{id}','ProductController@destroy');
Route::get('delete/{id}','SupplierController@destroy');
Route::get('delete/{id}','ExpencesController@destroy');*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', function(){
    return view('admin.login.register');
});