<?php

$N = 'App\\Controllers\\';

Route::get('/login', $N . 'LoginController@index');
Route::post('/login/proses', $N . 'LoginController@prosesLogin');
Route::post('/logut', $N . 'LoginController@doLogout');

Route::get('/home', $N . 'UsersController@home');
Route::get('/user/view', $N . 'UsersController@view');
Route::get('/user/add', $N . 'UsersController@add');
Route::post('/user/prosesAdd', $N . 'UsersController@prosesAdd');
Route::get('/user/edit/{id}', $N . 'UsersController@edit');
Route::post('/user/update/{id}', $N . 'UsersController@daftarupdate');
Route::get('/user/delete/{id}', $N . 'UsersController@delete');

Route::get('/daftar/view', $N . 'DaftarController@view');
Route::get('/daftar/add', $N . 'DaftarController@add');
Route::post('/daftar/prosesAdd', $N . 'DaftarController@prosesAdd');
Route::get('/daftar/edit/{id}', $N . 'DaftarController@edit');
Route::post('/daftar/update/{id}', $N . 'DaftarController@daftarupdate');
Route::get('/daftar/delete/{id}', $N . 'DaftarController@delete');

Route::get('/pelanggan/view', $N . 'PelangganController@view');
Route::get('/pelanggan/add', $N . 'PelangganController@add');
Route::post('/pelanggan/prosesAdd', $N . 'PelangganController@prosesAdd');
Route::get('/pelanggan/edit/{id}', $N . 'PelangganController@edit');
Route::post('/pelanggan/update/{id}', $N . 'PelangganController@pelangganupdate');
Route::get('/pelanggan/delete/{id}', $N . 'PelangganController@delete');

Route::get('/transaksi/view', $N . 'TransaksiController@view');
Route::get('/transaksi/add', $N . 'TransaksiController@add');
Route::post('/transaksi/prosesAdd', $N . 'TransaksiController@prosesAdd');
Route::get('/transaksi/edit/{id}', $N . 'TransaksiController@edit');
Route::post('/transaksi/update/{id}', $N . 'TransaksiController@update');
Route::get('/transaksi/delete/{id}', $N . 'TransaksiController@delete');

