<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
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

// Rota inicial
Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('/')->group(function () {
    // Login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticated']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Registro
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Resetar Senha
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);
});

Route::prefix('painel')->middleware('auth')->group(function () {
    // Administrativo
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    // Usuários
    Route::resource('users', UserController::class);

    // Perfil
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile/save', [ProfileController::class, 'save'])->name('profile.save');
});
