<?php

 /*Quando entrar vai direto para index*/
Route::get('/', 'EventoController@index');

/*treinamento*/
Route::get('many-to-many', 'EventoController@participar');

/*Resource que facilita chamar uma função do Controller*/
Route::resource('evento', 'EventoController');

/* rota tradicional do método Auth*/
Auth::routes();

/* Chamar o a função update*/
Route::get('/evento/{id}/update', 'HomeController@update');

/* Vai para a função index quando for para o home*/
Route::get('/home', 'HomeController@index')->name('home');
