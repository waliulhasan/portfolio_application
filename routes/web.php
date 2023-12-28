<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Admin Routes

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    // Route::namespace('Auth')->group(function(){
    //     // Login route
    //     Route::get('/login', 'Admin\Auth\AuthenticatedSessionController@create')->name('login');
    // });

    Route::middleware('guest:admin')->group(function (){
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login'); // this is for admin login ui
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminLogin'); // login credentials check for admin login
    });

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout'); // admin logout route

    Route::middleware('admin')->group(function (){
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard'); // admin dashboard ui
    });

});
