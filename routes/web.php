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
Route::get("/", [ProjekController::class, "index"])->middleware("pengguna");

Route::get('/daftar', [UserController::class, "daftar"]);
Route::post("/daftar/proses", [UserController::class, "store"]);
Route::get('/login', [UserController::class, "index"]);
Route::post("/login/proses", [UserController::class, "login"]);
Route::get("/user/dosen",[UserController::class, "cari_dosen"]);
Route::get("/user/logout", [UserController::class, "logout"])->middleware("pengguna");

// dashboard
Route::get("/projek/read/{slug}", [ProjekController::class, "show"])->middleware("pengguna");

// aktifitas
Route::get("/activity/detail", [ActivityController::class, "detail"]);

Route::get("/dashboard/dosen", [ProjekController::class, "dosen"]);
