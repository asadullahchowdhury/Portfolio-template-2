<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontControler;
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

Route::get('',[FrontControler::class,'dashboard'])->name('home');
Route::get('/resume',[FrontControler::class,'resume'])->name('resume');
