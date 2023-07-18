<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use Illuminate\Http\Request;
use App\Models\Pengguna;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [PenggunaController::class, 'index']);
Route::get('/users/create', [PenggunaController::class, 'create']);
Route::post('/save-user', [PenggunaController::class, 'saveUser']);