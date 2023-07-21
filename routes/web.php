<?php

use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\Guest\TrainController as TrainController;
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

Route::get('/', [PageController::class, 'home'])->name('guest.home');
Route::get('/trains', [TrainController::class, 'index'])->name('guest.train.index');
