<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hallo', function () {
	return "hallo, saya sedang belajar laravel";
});

Route::get('profil', 'CobaController@profil' );

Route::get('biodata', 'BiodataController@index');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');


// CRUD QUERY BUILDER
Route::get('/member', 'MemberController@index');
Route::get('/member/tambah', 'MemberController@tambah');
Route::post('/member/store', 'MemberController@store');
Route::get('/member/edit/{id}', 'MemberController@edit');
Route::post('/member/update', 'MemberController@update');
Route::get('/member/hapus/{id}', 'MemberController@hapus');
Route::get('/member/cari', 'MemberController@cari');

