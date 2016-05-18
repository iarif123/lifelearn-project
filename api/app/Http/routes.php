<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});


Route::get('books', array('as'=>'books', 'uses'=>'BooksController@index'));
Route::get('books/newBook', array('as'=>'new_book', 'uses' => 'BooksController@newBook'));
Route::post('books/create', array('uses'=>'BooksController@create'));
Route::get('books/{any}',array('as'=>'book','uses'=>'BooksController@read'));
Route::get('book/{any}/edit', array('as'=>'edit_book','uses'=>'BooksController@edit'));
Route::put('book/update',array('uses'=>'BooksController@update'));
Route::delete('book/delete',array('uses'=>'BooksController@destroy'));
