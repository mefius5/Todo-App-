<?php


Route::get('/', function () {
    return view('welcome');
});



Route::get('/new', [
    'uses' => 'PagesController@new'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todos', [
   'uses' => 'TodosController@index' 
]);

Route::post('/create/todo', [
    'uses' => 'TodosController$store'
]);
