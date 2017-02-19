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

Route::get('/', 'Viewcontroller@index');
Route::get('/halamanawal', 'Viewcontroller@halamanawal');
Route::get('/edit', 'Viewcontroller@edit');
Route::get('/tambah', 'Viewcontroller@tambah');
