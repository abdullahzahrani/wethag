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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/clear', function(){
        \Artisan::call('cache:clear');
    });
});
//    ->middleware('throttle:3,86000');
Route::post('email', [App\Http\Controllers\storeLesson::class, 'email'])->name('email');
Route::post('storeLesson', [App\Http\Controllers\storeLesson::class, 'store'])->name('store');
Route::get('/storeLesson', [App\Http\Controllers\storeLesson::class, 'join'])->name('join');
Route::get('team', [App\Http\Controllers\inx::class, 'team'])->name('team');
Route::get('teachers', [App\Http\Controllers\inx::class, 'teachers'])->name('teachers');
Route::get('{college?}/{subject?}/{chapter?}/{slug?}/', [App\Http\Controllers\inx::class, 'index'])->name('index');




