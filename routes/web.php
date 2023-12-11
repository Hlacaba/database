<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
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


// Route::get('/', [Demoontroller::Class, 'index']);

Route::get('/login', function () {
    return view('login')->with ('color', 'red');
});

Route::get('/login/verify', function () {
    $names = ['lacaba', 'singcol','lebron'];
    return view('verify-login', compact ('names'));
});
Route::get('/getallposts', [Democontroller::class, 'getAllPosts']);