<?php


Route::get('/', function () {
    return view('welcome');
});



Route::get('/new', [
    'uses' => 'PagesController@new'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
