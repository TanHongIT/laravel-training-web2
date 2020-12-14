<?php

use Illuminate\Support\Facades\Route;

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
    // return response()->json([
    //     'name' => 'Nguyễn Phương Tân',
    //     'state' => 'VN'
    // ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('caps/{str}', function($str) {
    return response()->caps($str);
});

Route::get('/download', function() {
    return response()->download('../resources/views/welcome.blade.php');
});

Route::get('/download-changename', function() {
    return response()->download('../resources/views/welcome.blade.php', 'other_name.php');
});

Route::get('/stream-download', function() {
    return response()->streamDownload(function() {
        echo 'Nguyễn Phương Tân';
    }, 'stream.txt');
});

Route::get('/image', function() {
    return response()->file('imagedemo.jpg');
});
