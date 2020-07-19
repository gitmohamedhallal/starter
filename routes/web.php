<?php

use Illuminate\Support\Facades\Route;

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




Route::domain('{account}.localhost')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
        return $account . " with " . $id;
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
