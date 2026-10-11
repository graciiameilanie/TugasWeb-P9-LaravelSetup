<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'judul' => 'Beranda',
        'nama' => 'Gracia Meilanie Sinaga',
        'mata_kuliah' => ['Pemrograman Web', 'Basis Data', 'Algoritma dan Struktur Data'],
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'judul' => 'Tentang Saya',
        'nama' => 'Gracia Meilanie Sinaga',
        'prodi' => 'Ilmu Komputer',
        'kampus' => 'Universitas Negeri Medan',
    ];
    return view('about', $data);
});

Route::get('/contact', function () {
    $data = [
        'judul' => 'Kontak',
        'email' => 'graciiameilanie@gmail.com',
        'kota' => 'Medan',
    ];
    return view('contact', $data);
});