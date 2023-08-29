<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () { return view('welcome'); })->name('dashboard');

Route::group(['middleware' => ['auth', 'verified']], function () { // For All
    // Profile URI's
        Route::GET('/profile', [ProfileController::class, 'profile'])->name('profile.edit');
        Route::PATCH('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
        Route::DELETE('/profile', [ProfileController::class, 'destroyProfile'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:***', 'verified'], 'prefix' => 'system'], function() { // For Admin
    // HIDDEN FOR PUBLIC REPOSITORY
});

// , 'prefix' => 'company'
Route::group(['middleware' => ['auth', 'role:***', 'verified'], 'prefix' => 'panel'], function() { // For Companies
    // HIDDEN FOR PUBLIC REPOSITORY
});

require __DIR__.'/auth.php';
