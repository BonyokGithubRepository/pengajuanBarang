<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['middleware' => 'auth'],function(){
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::group(['middleware' => 'auth','role:ptl'],function(){
    Route::get('/PTL','PTLController@index')->name('ptl');
});
Route::group(['middleware' => 'auth','role:mitra'],function(){
    Route::get('/request','requesController@index')->name('request');

});
Route::group(['middleware' => 'auth', 'role:admin'],function(){

    Route::get('/PTL','PTLController@index')->name('ptl-admin');
    Route::get('/mitra','mitraController@index')->name('mitra');
    Route::get('/perangkat','perangkatController@index')->name('perangkat');
    Route::get('/QTY','QTYController@index')->name('qty');
    Route::get('/request','requesController@index')->name('request');
    
    Route::post('/mitra/create','mitraController@create');
    Route::post('/PTL/create','PTLController@create');
    Route::post('/perangkat/create','perangkatController@create');
    Route::post('/QTY/create','QTYController@create');
    Route::post('/request/create','RequesController@create');

    Route::get('/perangkat/edit/{id}','PerangkatController@edit');
    Route::put('/perangkat/update/{id}','PerangkatController@update');
    Route::get('/perangkat/delete/{id}','PerangkatController@destroy');

    Route::get('/mitra/delete/{id}','mitraController@destroy');
    Route::put('/mitra/update/{id}','mitraController@update');
    Route::get('/mitra/edit/{id}','mitraController@edit');

    Route::get('/PTL/edit/{id}','PTLController@edit');
    Route::get('/PTL/delete/{id}','PTLController@delete');
    Route::put('/PTL/update/{id}','PTLController@update');

    Route::get('/QTY/edit/{id}','QTYController@edit');
    Route::get('/QTY/delete/{id}','QTYController@delete');
    Route::put('/QTY/update/{id}','QTYController@update');

    Route::get('/request/delete/{id}','RequesController@delete');

 });
    Route::get('/loginptl','AuthController@loginPtl')->name('logiptl');
    Route::post('/postloginPtl','AuthController@postloginPtl');

    Route::get('/mitra/cari','mitraController@cari');

    Route::get('/logout','AuthController@logout');
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin');
    Route::get('/register','AuthController@register')->name('register');