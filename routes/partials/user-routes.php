<?php
use Illuminate\Support\Facades\Route;
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('create', 'UserController@create')->name('user.create');
    Route::post('store', 'UserController@store')->name('user.store');
    Route::post('edit', 'UserController@edit')->name('user.edit');
    Route::post('update', 'UserController@update')->name('user.update');
    Route::delete('destroy', 'UserController@destroy')->name('user.destroy');
});
