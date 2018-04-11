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

  Route::resource('ender','EnderController');
  Route::get('ender',['as'=>'ender','uses'=>'EnderController@index']);
  Route::get('ender/edit/{id}', array('as' => 'ender.edit', 'uses' =>'EnderController@edit'));
  Route::put('ender/update/{id}', array('as' => 'ender.update', 'uses' =>'EnderController@update'));
  Route::post('ender/create', array('as' => 'ender.create', 'uses' =>'EnderController@create'));
  Route::post('ender/store', array('as' => 'ender.store', 'uses' =>'EnderController@store'));
  Route::get('ender/destroy/{id}', ['as' => 'ender/destroy', 'uses'=>'EnderController@destroy']);
