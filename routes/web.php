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

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});


Route::get('/outlet', function () {
    return view('outlet');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/logout', 'LoginController@logout');

Route::get('/shopcard', function () {
    return view('shopcard');
});

// Route::get('/cadastrar', 'CadastrarController@rotaCadastrar');
// Route::post('/cadastrar', 'CadastrarController@Cadastrar');

Route::get('/aleatorio', 'CadastrarController@index');

Route::get('/busca', 'CadastrarController@busca');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function(){
    Route::get('/cadastrar', function(){
        return view('cadastrar');

    });
});

Route::post('add', "CardController@add");

Route::get('/cart/add/{idProduct}', "CardController@add");
Route::get('/cart', "CardController@viewCart");