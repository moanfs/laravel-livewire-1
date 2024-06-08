<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('/');
    Route::get('timeline', \App\Livewire\Timeline::class)->name('timeline');

    Route::get('users', \App\Livewire\User\Index::class)->name('users');
    Route::get('user/{user}', \App\Livewire\User\ShowUser::class)->name('user.show');
});

Route::get('login', \App\Livewire\Auth\Login::class)->name('login')->middleware('guest');
Route::post('logout', \App\Http\Controllers\logoutController::class)->name('logout');
