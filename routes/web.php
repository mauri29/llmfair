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
    return view('shop.index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/llmfair', function () {
    return view('llmfair');
});

Route::get('/lexpo', function () {
    return view('lexpo');
});

Route::get('/llmgermany', function () {
    return view('llmgermany');
});

Route::get('/mlawschools', function () {
    return view('mlawschools');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function(){
/*Upload documents*/
	Route::get('/upload', 'VideoUploadController@index');
	Route::post('/upload', 'VideoUploadController@store');
	Route::post('/videos', 'VideoController@store');
	Route::put('/videos/{video}', 'VideoController@update');
/*Show Channel*/
	Route::get('/channel/{channel}', 'ChannelController@show');
/*Edit Channel*/
	Route::get('/channel/{channel}/edit', 'ChannelSettingsController@edit');
	Route::put('/channel/{channel}/edit', 'ChannelSettingsController@update');
});
