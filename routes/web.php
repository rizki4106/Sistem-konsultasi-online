<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ActivityController;

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

Route::get('/login', [UserController::class, "index"]);
Route::get('/daftar', [UserController::class, "daftar"]);

// dashboard
Route::get("/dashboard/mahasiswa", [ProjekController::class, "index"]);
Route::get("/projek/read/{slug}", [ProjekController::class, "show"]);

// aktifitas
Route::get("/activity/detail", [ActivityController::class, "detail"]);

Route::get("/dashboard/dosen", [ProjekController::class, "dosen"]);
