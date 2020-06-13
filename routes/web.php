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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')
        ->name('home');
    Route::get('/export', 'PeopleController@export')
        ->name('export');
    Route::post('/import', 'PeopleController@import')
        ->name('import');
});
