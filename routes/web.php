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

Route::get('/rule-single',[
    'uses' => 'FrontEndController@rule_single',
    'as' => 'rule.single'
]);

Route::get('/vote',[
    'uses' => 'FrontEndController@vote',
    'as' => 'vote'
]);

Route::get('/result',[
    'uses' => 'FrontEndController@result',
    'as' => 'result'
]);

Route::get('/initiative',[
    'uses' => 'FrontEndController@initiative',
    'as' => 'initiative'
]);
