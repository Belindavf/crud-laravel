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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/hola', function(){
    return "¡Hola mundo!";
});

Route::get('/user/{id}', function($id){
    return "Mi código es: " . $id;
});

Route::get('/',  'StudentController@index') -> name('home');

Route::get('/create',  'StudentController@create') -> name('create'); //si se llama por get va a /create
Route::post('/create',  'StudentController@store') -> name('store'); //si se llama por post va a /store

Route::get('/edit/{id}',  'StudentController@edit') -> name('edit');
Route::post('/update/{id}',  'StudentController@update') -> name('update');

//                        fichero creado en StudentController -> nombre que se la da
//Route::get('/delete/{id}', 'StudentController@delete') -> name('delete');

Route::delete('/delete/{id}', 'StudentController@delete') -> name('delete');
