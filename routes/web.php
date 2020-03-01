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

Route::get('/howtouse',[
    'uses' => 'FrontEndController@howtouse',
    'as' => 'how_to_use'
]);

Route::get('/result_total',[
    'uses' => 'FrontEndController@result_total',
    'as' => 'result_total'
]);

Route::get('/vote_total',[
    'uses' => 'FrontEndController@vote_total',
    'as' => 'vote_total'
]);

Route::get('/comment_total',[
    'uses' => 'FrontEndController@comment_total',
    'as' => 'comment_total'
]);

Route::get('/introduce',[
    'uses' => 'FrontEndController@introduce',
    'as' => 'introduce'
]);

Route::get('/register',[
    'uses' => 'FrontEndController@manage',
    'as' => 'manage'
]);

Auth::routes();

Route::get('/home', 'FrontEndController@index');

Route::resource('rules','RulesController');

Route::resource('users','UsersController');

Route::resource('comments','CommentsController');

Route::resource('contacts','ContactsController');

Route::post('/votes',[
    'uses' => 'VotesController@store',
    'as' => 'votes.store'
]);


//Route::resource('profile','ProfilesController');

Route::get('/profile',[
     'uses' => 'ProfilesController@index',
     'as' => 'profile'
 ]);

Route::put('/profile/update',[
    'uses' => 'ProfilesController@update',
    'as' => 'profile.update'
]);

Route::get('sitemap', 'SiteMapController@sitemap')->name('sitemap');

