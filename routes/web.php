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
	return view('public/index');
});

Route::get('/blog', function () {
	return view('public/index');
});

Route::get('/caracteristicas', function () {
	return view('public/index');
});

/*Route::get('/login', function () {
	return view('public/login');
});

Route::post('/login', function () {
	return "Logged in...<br><pre>" . print_r($_REQUEST, true) . "</pre>";
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('app/index');
})->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
