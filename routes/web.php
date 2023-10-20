<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('admin/login', function () {
    return view('admin/login_admin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/user', function () {
    return view('user/dashboard_user');
});

Route::get('/user/bayar_tagihan', function () {
    return view('user/bayar_tagihan');
});

Route::get('/user/profile', function () {
    return view('user/profile_user');
});

Route::get('/admin', function () {
    return view('admin/dashboard_admin', [
        'petugas' => [
            'nama' => 'Admin',
        ],
        'buku' =>     [
            [
                'no' => 1,
                'judul' => 'Lorem',
                'pengarang' => 'Doe',
                'penerbit' => 'Atma Jaya'
            ],
            [
                'no' => 2,
                'judul' => 'Ipsum',
                'pengarang' => 'Joe',
                'penerbit' => 'UAJY Lib'
            ]
        ]
    ]);
});

Route::get('/admin/tambah_peminjaman', function () {
    return view('admin/tambah_peminjaman');
});

Route::get('/admin/pengembalian', function () {
    return view('admin/pengembalian_buku');
});

Route::get('/admin/tambah_buku', function () {
    return view('admin/tambah_buku');
});

Route::get('/admin/tambah_buku/tambah_pengarang', function () {
    return view('admin/tambah_pengarang');
});

Route::get('/admin/tambah_buku/tambah_penerbit', function () {
    return view('admin/tambah_penerbit');
});

Route::get('/admin/tambah_buku/tambah_kategori', function () {
    return view('admin/tambah_kategori');
});

Route::get('/admin/edit_buku', function () {
    return view('admin/edit_buku');
});
