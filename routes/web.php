<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('adminLayout/index');
});
Route::get('/dosen', [HomeController::class, 'dosen'])->name('dosen');
Route::get('/createdosen', [HomeController::class, 'create']);
Route::post('/store', [HomeController::class, 'store']);
Route::delete('/list/delete{mahasiswa:slug}', [HomeController::class, 'delete']);
Route::patch('list/update/{mahasiswa:slug}', [HomeController::class, 'update']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


