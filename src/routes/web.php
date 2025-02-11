<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\UserController;
use App\Models\Administrator;

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

// AdminAccount
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register_store']);

Route::get('/login', [UserController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
});

//

Route::get('/', [ContactController::class, 'index']);

Route::get('/confirm', [ContactController::class, 'confirm']);

Route::get('/thanks', [ContactController::class, 'thanks']);

Route::get('/admin', [ContactController::class, 'admin']);

Route::get('/modal', [ModalController::class, 'modal']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
});
