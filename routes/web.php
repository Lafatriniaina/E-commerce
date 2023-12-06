<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DescriptionController;
use \App\Http\Controllers\CartController;

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

Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::post('/', [ProductsController::class, 'addToCart'])->name('home');
// Route::delete('/{id}', [CartController::class, 'removeFromCart'])->name('remove');

Route::prefix('/user')->group(function () {
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('auth.register');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('auth.login');

    Route::get('/description/{name}/{categories}/{prices}/{quantities}/{contents}',  [DescriptionController::class, 'someMethod' ])->name('description');

    Route::get('/dashboard', function () {
        return view('layouts.Dashboard');
    })->name('dashboard');

});

require __DIR__.'/auth.php';
