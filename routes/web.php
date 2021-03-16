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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/page1', 'App\Http\Controllers\PagesController@page1');
Route::get('/page2', 'App\Http\Controllers\PagesController@page2');


Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('notes', 'App\Http\Controllers\Ans1Controller');
Route::resource('notes2', 'App\Http\Controllers\Ans2Controller');
Auth::routes();


Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');
Route::get('summary', 'App\Http\Controllers\Ans1Controller@index');