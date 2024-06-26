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
    return view('welcome');
});

    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login');
    Route::get('admin-login', [\App\Http\Controllers\Admin\LoginController::class,'login'])->name('login');

    Route::get('/login', function () {
        login(\illuminate\support\facades\auth::user());
    });
