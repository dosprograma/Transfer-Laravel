<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Html\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;

Route::post('password/email', [ForgotPasswordController::class, 'password.email'])->name('password.email');

Route::get('/',[UserController::class, 'index'])->name('/')->middleware('auth');
Route::post('/userSave', [UserController::class, 'salvar'])->name('userSave')->middleware('auth');
Route::post('/userEdit', [UserController::class, 'atualizar'])->name('userEdit')->middleware('auth');

Route::get('/Transfer', [TransferController::class, 'index'])->name('/Transfer')->middleware('auth');
Route::post('/TransferSave', [TransferController::class, 'salvar'])->name('TransferSave')->middleware('auth');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'password.reset.token'])->name('password.reset.token')->middleware('auth');

Route::post('password/reset', [ResetPasswordController::class, 'resetar.senha'])->name('resetar.senha')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');
