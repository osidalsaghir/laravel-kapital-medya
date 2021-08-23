<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/', [Api::class, "index"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/users', [Api::class, "index"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/users/single/{id}/', [Api::class, "show"]);

