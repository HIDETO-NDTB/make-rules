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

Route::get('/', [

    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category',[
    'uses' => 'FrontEndController@category',
    'as' => 'category'
]);

Route::get('/comment',[
    'uses' => 'FrontEndController@comment',
    'as' => 'comment'
]);
