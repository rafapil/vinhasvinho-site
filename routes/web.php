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
    return view('index');
});

Route::get('/regioes', function () {
    return view('regioes');
});

// Route::get('/admin', function () {
//     return view('dashboard');
// });

Route::get('/tras-os-montes', function () {
    return view('tras-os-montes');
});


Route::get('/produtores', function () {
    return view('produtores2');
});

Route::get('cadastropf', function () {
    return view('cadastropf');
});

Route::get('cadastropj', function () {
    return view('cadastropj');
});

Route::get('Carrinho', function () {
    return view('Carrinho');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('devolucao', function () {
    return view('devolucao');
});

Route::get('douro', function () {
    return view('douro');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('login', function () {
    return view('login');
});

Route::get('minho', function () {
    return view('minho');
});

Route::get('politicafrete', function () {
    return view('politicafrete');
});


Route::get('privacidade', function () {
    return view('privacidade');
});

Route::get('quemsomos', function () {
    return view('quemsomos');
});

Route::get('/produtos', 'produtosController@mostrarProdutos');

Route::get('/produtos/categoria/{id}', 'produtosController@filtroCategoria');

Route::get('/produtos/regiao/{id}', 'produtosController@filtroRegiao');

Route::get('/produtos/{id}', 'produtosController@mostrarProduto');

//Route::get('/index/login.php', function(){
//    return view ('login');
//});

Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/cadProdutores', 'AdminController@cadProdutores')->name('cadProdutores');
Route::post('/cadProdutores/insert', 'AdminController@insert');
Route::get('/cadProdutores/remove/{id}', 'AdminController@remove');


Route::get('/cadProdutos', 'AdminController@cadProdutos')->name('cadProdutos');

Route::get('/categoria/remove/{id}', 'AdminController@categoriaRemove');
Route::post('/categoria/insert', 'AdminController@insertCategoria');

Route::get('/regiao/remove/{id}', 'AdminController@regiaoRemove');
Route::post('/regiao/insert', 'AdminController@insertRegiao');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
