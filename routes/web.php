<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/s3', function () {
    // return Storage::disk('s3')->download('profile-photos/Donkey_Kong_60.png');
    // $s3 = Storage::disk('s3')->url('profile-photos/Donkey_Kong_60.png');
    // return $s3;
    // return '<img src=' . $s3 . '></img>';
});
