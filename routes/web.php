<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::get('/form', function () {
    return view('form');
});
Route::resource('/dashboard', EbookController::class)->middleware('auth');
Route::get('/detail/{id}', [EbookController::class, 'show']);
Route::get('/form_edit/{id}', [EbookController::class, 'edit']);
Route::put('/form_edit/{id}', [EbookController::class, 'update']);
Route::delete('/dashboard', [EbookController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
