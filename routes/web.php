<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ketika pengunjung meminta url '/' maka kita jalankan sebuah function berikut
Route::get('/', function () {

    return view('welcome');
});

// ketika pengunjung menuliskan alamat /users maka akan menjalankan method index di controller UserController
Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'test']);

Route::get('/about', function () {
    // Misalnya ini isinya adalah logika yang kompleks dan panjang


    echo "Ini halaman about";
});

// Bikin controller HomeController lalu buat route mengarah ke HomeController dengan method index
Route::get('/home', [HomeController::class, 'index']);

// Controller AboutController
// Routes ke '/about-us' yang mengarah ke AboutController dengan method aboutUs
Route::get('/about-us', [AboutController::class, 'aboutUs']);


// Bikin routes yang mengarah ke '/my-profile'
// lalu arahkan ke MyProfileController dengan method index
// lalu tampilkan view berisi teks "Ini halaman my profile"

Route::get('/my-profile/{name}/{umur}', [MyProfileController::class, 'index']);

// Bikin routes yang mengarah ke '/personal-web/{nama}/{jenis_kelamin}'
// Controller PersonalWebController

// Tampilan output/view :
// Halo saya adalah Enrico dan saya adalah laki-laki


// Tugas Hari Ini

/*
    1. Bikin Project Laravel Baru namanya "first-laravel-app"
    2. Bikin 3 menu 
        - Home
        - Profile
        - Contact
    3. Home menampilkan tampilan "Ini adalah home" (/)
    4. Profile menampilkan {nama} dan {umur} (/profile/{nama}/{umur})
    5. Menampilkan "Ini adalah halaman Contact" (/contact)
*/
