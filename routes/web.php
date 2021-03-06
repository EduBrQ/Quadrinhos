<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/produtos', 'ProdutosController');
    Route::get('/produtos/{id}/delete', 'ProdutosController@delete');
    Route::get('/aboutme', 'AboutmeController@index')->name('aboutme');
    Route::get('/quadrinho', 'QuadrinhoController@index')->name('quadrinho');
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@update_avatar');
    Route::get('/aboutus', 'UserController@aboutus');





//COLEÇÕES
    Route::resource('/colecoes', 'ColecaoRevistasController');
    Route::get('/colecoes/{id}/delete', 'ColecaoRevistasController@delete');
    Route::get('/colecoes/{id}/titulos', 'ColecaoRevistasController@titulos');

//TÍTULOS
    Route::resource('/titulos', 'TituloController');
    Route::get('/titulos/create/{id}', 'TituloController@create');
    Route::get('/titulos/{id}/delete', 'TituloController@delete');

//AMImGOS
    Route::resource('/amigos', 'AmigoController');
    Route::get('/amigos/create', 'AmigoController@create');
    Route::get('/amigos/{id}/delete', 'AmigoController@delete');

//EMPRESTIMOS
    Route::resource('/emprestimos', 'EmprestimoController');
    Route::get('/emprestimos/create/{id}', 'EmprestimoController@create');
    Route::get('/emprestimos/{id}/delete', 'EmprestimoController@delete');
    Route::get('/emprestimos/{id}/edit', 'EmprestimoController@edit');



});