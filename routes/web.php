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

Route::post('/test', 'valController@show');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cal', function () {
    return view('cal');
});

Route::post('/calculate', 'calculateController@cal');
Route::post('/step', 'calculateController@addStep');

Route::get('/ical', 'icalController@ical');

Route::get('/about', function () {
    return view('about', [
        'name' => 'korn'
    ]);
});

Route::get('/task', function () {
    return view('task');
});

Route::get('/calendar', function () {
    return view('calendar');
});
