<?php

use Illuminate\Support\Facades\Route;

Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/', 'UserController@index')->name('/')->middleware('auth');;
Route::post('/userSave', 'UserController@salvar')->name('usuario_salvar')->middleware('auth');;
Route::post('/userEdit', 'UserController@atualizar')->name('usuario_atualizar')->middleware('auth');;

Route::post('/Transfer', 'TransferController@index')->name('transferencia_index')->middleware('auth');;
Route::post('/TransferSave', 'TransferController@salvar')->name('transferencia_salvar')->middleware('auth');;

Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token')->middleware('auth');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('resetar.senha')->middleware('auth');

Auth::routes();
