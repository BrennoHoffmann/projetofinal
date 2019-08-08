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

Route::get('/products', function () {
    return view('products');
});


Route::get('/outlet', function () {
    return view('outlet');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/logout', 'LoginController@logout');


Route::get('/cadastrar', 'CadastrarController@rotaCadastrar');
Route::post('/cadastrar', 'CadastrarController@Cadastrar');

//Route::get('/aleatorio', 'CadastrarController@index');

//Route::post('/aletorio', 'CadastrarController@buscar');

//Route::get('/aleatorio', 'CadastrarController@buscar');

Route::get('/search', 'CadastrarController@search');
Route::post('/search', 'CadastrarController@search');

Route::get('/', 'HomeController@product');
Route::post('/','HomeController@product');

Route::get('/home', 'HomeController@product');
Route::post('/home','HomeController@product');

Route::get('/knowMore/{id}', 'HomeController@knowMore');

Route::get('/index',function(){
    return view('painel.index');
})->middleware('admin');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//routes para atualizar o produto

Route::get('upDate/{id}','UpDateController@upDate');
Route::post('upDate/{id}','UpDateController@upDate');

Route::get('productsUPDATE','UpDateController@list');
Route::post('productsUPDATE','UpDateController@list');

Route::get('upDate/{id}','UpDateController@toChange');
Route::put('upDate/{id}','UpDateController@changing');

Route::get('delete/{id}','UpDateController@delete');
Route::delete('delete/{id}','UpDateController@showDelete');

Route::get('admin','AdminController@table');
Route::post('admin','AdminController@table'); 







// Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function(){
//     Route::get('/cadastrar', function(){
//         return view('cadastrar');

//     });
// });

Route::post('add', "CartController@add");

Route::get('/cart/add/{id}', "CartController@add");
Route::get('/cart', "CartController@viewCart");


//rota pra comprar

Route::get('/finishingOrder/add/{id}', "shopController@add");




