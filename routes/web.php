<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\akuntansitransaksiController@index');
    Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
    
    Route::get('akuntansitransaksi/tambah', 'App\Http\Controllers\akuntansitransaksiController@tambah');
    Route::post('akuntansitransaksi/tambah_proses', 'App\Http\Controllers\akuntansitransaksiController@tambah_proses');
    Route::get('akuntansitransaksi/edit/{id}', 'App\Http\Controllers\akuntansitransaksiController@edit');
    Route::post('akuntansitransaksi/edit_proses', 'App\Http\Controllers\akuntansitransaksiController@edit_proses');
    Route::get('akuntansitransaksi/delete/{id}', 'App\Http\Controllers\akuntansitransaksiController@delete');

    Route::get('hari', 'App\Http\Controllers\HariController@index');
    Route::get('hari/tambah', 'App\Http\Controllers\HariController@tambah');
    Route::post('hari/tambah_proses', 'App\Http\Controllers\HariController@tambah_proses');
    Route::get('hari/edit/{id}', 'App\Http\Controllers\HariController@edit');
    Route::post('hari/edit_proses', 'App\Http\Controllers\HariController@edit_proses');
    Route::get('hari/delete/{id}', 'App\Http\Controllers\HariController@delete');

    Route::get('dosen', 'App\Http\Controllers\DosenController@index');
    Route::get('dosen/tambah', 'App\Http\Controllers\DosenController@tambah');
    Route::post('dosen/tambah_proses', 'App\Http\Controllers\DosenController@tambah_proses');
    Route::get('dosen/edit/{id}', 'App\Http\Controllers\DosenController@edit');
    Route::post('dosen/edit_proses', 'App\Http\Controllers\DosenController@edit_proses');
    Route::get('dosen/delete/{id}', 'App\Http\Controllers\DosenController@delete');
