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

Route::get('/', fn () => view('home'));
Route::redirect('/things/1', '/things/1/view');
Route::get('/things/1/view', fn () => view('thing'));
Route::post('/things/1', fn () => view('success'))->name('success');
