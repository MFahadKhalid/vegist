<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

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
    return view('vegist.home');
})->name('index');

Route::get('vegist/detail',[DetailController:: class , 'detail'])->name('vegist.detail');
