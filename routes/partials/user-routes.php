<?php
use Illuminate\Support\Facades\Route;
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
});