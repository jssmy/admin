<?php
use Illuminate\Support\Facades\Route;
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('create', 'UserController@create')->name('user.create');
    Route::post('store', 'UserController@store')->name('user.store');
    Route::get('edit/{user}', 'UserController@edit')->name('user.edit');
    Route::post('reset-password/{user}', 'UserController@reset')->name('user.reset-password');
    Route::post('update/{user}', 'UserController@update')->name('user.update');
    Route::delete('destroy/{user}', 'UserController@destroy')->name('user.destroy');
});
