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

<<<<<<< HEAD
Route::get('/', function () {
=======
Route::get('/',function(){
>>>>>>> 2a8acda7b5317eb196422e251de3dce0e6b85686
    return view('home');
});

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/produtos', 'ProdutosController@produtos');

Route::get('/about', 'AboutController@about');



