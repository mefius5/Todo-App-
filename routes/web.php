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
   'uses' => 'TodosController@index' ,
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todos.save'
]);

Route::post('/create/todo', [
    'uses' => 'TodosController@store'
]);

Route::get('/todo/completed/{id}', [
   'uses' => 'TodosController@completed', 
    'as' => 'todos.completed'
]);
