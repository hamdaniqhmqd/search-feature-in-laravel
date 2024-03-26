<?php
use App\Http\Controllers\DataMahasiswa;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/content', [DataMahasiswa::class, 'index'])->name('content.index');