<?php

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

Route::get('/', function(){
    return view('index');
});
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('store');
Route::delete('/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('update');