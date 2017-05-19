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

/** 
 *
 *  If you are contributing a page to this website, and you are not familiar with 
 *  MVC (Model-View-Controller) then this will look confusing. 
 *
 *  To add your own route just copy the example block below to add your page, changing the values of 'mynewroute' to 
 *  match your url (endpoint) and 'mynewview' to the name of the view you are adding to /resources/views/mynewview.blade.php
 *
 * Route::get('/mynewroute',function() {
 * 	return view('pages.mynewview');
 * });
 * 
 */

Route::get('/', ['as'=>'','uses'=>'GeneralPagesController@home']);
Route::get('/about', ['as'=>'','uses'=>'GeneralPagesController@about']);
Route::get('/give-a-talk', ['as'=>'','uses'=>'GeneralPagesController@giveatalk']);
Route::get('/sponsorship', ['as'=>'','uses'=>'GeneralPagesController@sponsorship']);
Route::get('/community', ['as'=>'','uses'=>'GeneralPagesController@community']);
Route::get('/code-of-conduct', ['as'=>'','uses'=>'GeneralPagesController@codeofconduct']);
Route::get('/privacy', ['as'=>'','uses'=>'GeneralPagesController@privacy']);
Route::get('/terms', ['as'=>'','uses'=>'GeneralPagesController@terms']);
Route::get('/cookies', ['as'=>'','uses'=>'GeneralPagesController@cookies']);

Route::get('/events', ['as'=>'events','uses'=>'EventsPagesController@index']);
Route::get('/events/aberdeen', ['as'=>'events.aberdeen','uses'=>'EventsPagesController@eventsAberdeen']);
Route::get('/events/php', ['as'=>'events.php','uses'=>'EventsPagesController@eventsPHP']);

Route::get('/contact', ['as'=>'','uses'=>'ContactFormController@index']);
Route::post('/contact', ['as'=>'contactform','uses'=>'ContactFormController@store']); 
