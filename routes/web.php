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

Route::get('/category_single/{category}',[
    'uses' => 'FrontEndController@category_single',
    'as' => 'category.single'
]);

Route::get('/rule-single/{id}',[
    'uses' => 'FrontEndController@rule_single',
    'as' => 'rule.single'
]);

Route::get('/vote/{id}',[
    'uses' => 'FrontEndController@vote',
    'as' => 'vote'
]);

Route::get('/result/{id}',[
    'uses' => 'FrontEndController@result',
    'as' => 'result'
]);

Route::get('/initiative',[
    'uses' => 'FrontEndController@initiative',
    'as' => 'initiative'
]);

Route::get('/contact',[
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
]);

Auth::routes();

Route::get('/home', 'FrontEndController@index');

Route::resource('rules','RulesController');

Route::resource('users','UsersController');

Route::resource('comments','CommentsController');

Route::post('/votes',[
    'uses' => 'VotesController@store',
    'as' => 'votes.store'
]);

Route::get('/profile',[
    'uses' => 'ProfilesController@index',
    'as' => 'profile'
]);

Route::post('/profile/update',[
    'uses' => 'ProfilesController@update',
    'as' => 'profile.update'
]);
