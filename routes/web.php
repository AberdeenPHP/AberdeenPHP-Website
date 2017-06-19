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
