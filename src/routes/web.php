<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use App\Models\User;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
// Route::middleware('auth')->group(function () {
//     Route::get('/admin', [AdminController::class, 'index']);
// });

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/search', [AdminController::class, 'search']);

Route::get('/', [ContactController::class, 'index']);

Route::post('/post', [ContactController::class, 'post']);

Route::post('/confirm', [ContactController::class, 'confirm']);

Route::get('/modal', [ModalController::class, 'modal']);
