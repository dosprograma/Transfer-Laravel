<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index')->name('/');
Route::post('/userSave', 'UserController@salvar')->name('usuario_salvar');
Route::post('/userEdit', 'UserController@atualizar')->name('usuario_atualizar');

Route::post('/Transfer', 'TransferController@index')->name('transferencia_index');
Route::post('/TransferSave', 'TransferController@salvar')->name('transferencia_salvar');

