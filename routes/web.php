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

Auth::routes(['register' => false]);

Route::get('/admin/', function () {
    if (Auth::check()) {
        return view('admin');
    }
    return redirect('/login');
});
Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@create');
Route::get('/', function () {
    return view('welcome');
});

