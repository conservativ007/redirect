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

  Route::get('/test1', 'Redirect1@one');
  Route::get('/test2', 'Redirect1@two');

  Route::get('/test3', 'Redirect1@three');
  Route::get('/test4/{val1}/{val2}', 'Redirect1@four') -> name('user');
