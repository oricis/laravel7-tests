<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Test routes
|--------------------------------------------------------------------------
|
| Routes to use fetch
|
*/

Route::get('tags', 'TagController@index')
    ->name('tags.index');
Route::post('tags', 'TagController@store')
    ->name('tags.store');
Route::put('tags/{id}', 'TagController@update')
    ->name('tags.update');
Route::delete('tags/{id}', 'TagController@destroy')
    ->name('tags.destroy');

Route::post('images/store', 'ImageController@store')
    ->name('images.store');
