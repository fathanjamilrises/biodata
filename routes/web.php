<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\JalurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ini adalah route tanpa MVC
Route::get('/jalurbaru', function() {
    return 'ini jalur baru tanpa MVC';
});


// ini adalah route menggunakan View
Route::get('/jalurview', function() {
    return view('viewjalur');
});

// ini adalah route menggunakan View dan Controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);

// ini adalah route menggunakan View Controller dan Model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);

// route biodata
Route::get ('/biodata', [BiodataController::class, 'menampilkanBiodata']);