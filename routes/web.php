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

Route::view('/welcome', 'welcome');
Route::get('404', 'ErrorsController@e404')->name('404');
Route::get('500', 'ErrorsController@e500')->name('500');

Route::get('companies-with-active-employees', 'QueriesController@companies')
    ->name('companies.employees.active');

$allowedColors = 'red|green|blue';
Route::get('colors/{option}/{number}', 'TestRoutesController@index')
    ->name('colors.index')
    ->where('option', $allowedColors);
