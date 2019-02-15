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

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::post('/create/todo', [
    'uses' => 'TodosController@store'
]);
