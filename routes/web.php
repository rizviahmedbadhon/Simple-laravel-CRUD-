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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// CRUD System
Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/create', 'ContactsController@create');
Route::post('/contacts/store', 'ContactsController@store')->name('contacts.store');
Route::get('/contacts/{id}/edit', 'ContactsController@edit')->name('contacts.edit');
Route::post('/contacts/{id}/update', 'ContactsController@update')->name('contacts.update');
Route::get('/contacts/{id}/destroy', 'ContactsController@destroy')->name('contacts.destroy');