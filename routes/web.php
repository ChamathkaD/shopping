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

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('index');
})->middleware(['auth','verified']);


Route::get('user/account',[\App\Http\Controllers\UserProfileController::class, 'account'])->name('account')->middleware(['auth','verified']);


Route::get('user/account/profile/newAddress',[\App\Http\Controllers\UserProfileController::class, 'newAddress'])->name('profile.newAddress')->middleware(['auth','verified']);
