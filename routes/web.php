<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

// Halaman daftar mahasiswa
Route::get('/daftar', function () {
    $mahasiswa = session('mahasiswa', []); // ambil data dari session, default array kosong
    return view('daftar.index', compact('mahasiswa'));
});

// Halaman form registrasi
Route::get('/daftar/registrasi', function () {
    return view('daftar.create');
});

// Simpan data mahasiswa
Route::post('/admin/fal', function (Request $request) {
    // ambil data lama
    $mahasiswa = session('mahasiswa', []);

    // tambahkan data baru
    $mahasiswa[] = [
        'nim' => $request->nim,
        'nama' => $request->nama,
        'email' => $request->email,
    ];

    // simpan ke session
    session(['mahasiswa' => $mahasiswa]);

    // redirect ke daftar
    return redirect('/daftar');
})->name('admin.fal');

//Hapus data mahasiswa
Route::delete('/daftar/{index}', function ($index) {
    $mahasiswa = session('mahasiswa', []);

    if (isset($mahasiswa[$index])) {
        unset($mahasiswa[$index]); // hapus mahasiswa sesuai index
        session(['mahasiswa' => array_values($mahasiswa)]); // reset index array
    }

    return redirect('/daftar');

})->name('mahasiswa.destroy');