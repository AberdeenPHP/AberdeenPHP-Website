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

Route::get('/', function () { return view('pages.homepage'); });
Route::get('/about', function () { return view('pages.about'); });
Route::get('/events', function () { return view('pages.events'); });
Route::get('/give-a-talk', function () { return view('pages.talk'); });
Route::get('/sponsorship', function () { return view('pages.sponsor'); });
Route::get('/news', function () { return view('pages.welcome'); });
Route::get('/community', function () { return view('pages.community'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/code-of-conduct', function () { return view('pages.codeofconduct'); });
Route::get('/privacy', function () { return view('pages.privacy'); });
Route::get('/terms', function () { return view('pages.terms'); });






