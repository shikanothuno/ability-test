<?php

use App\Http\Controllers\ConfirmController;
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
Route::get("/",[ConfirmController::class,"index"]);
Route::get("/confirm",[ConfirmController::class,"confirm"]);
Route::get("/admin",[ConfirmController::class,"admin"]);
Route::get("/thanks",[ConfirmController::class,"thanks"]);
Route::get("/login",[ConfirmController::class,"login"]);
Route::get("/register",[ConfirmController::class,"register"]);
