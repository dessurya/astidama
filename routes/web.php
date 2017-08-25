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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/black-theme', 'Frontend\HomeController@indexBlackTheme')
	->name('frontend.home.bt');
Route::get('/white-theme', 'Frontend\HomeController@indexWhiteTheme')
	->name('frontend.home.wt');
