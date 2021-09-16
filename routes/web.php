<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\UserController::class , 'index'])->name('user.index');

Route::put('/users', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

Route::put('/users/{user}/update', [App\Http\Controllers\UserController::class , 'update'])->name('user.profile.update');

Route::get('/users/{user}/profile', [App\Http\Controllers\UserController::class , 'show'])->name('user.profile.show');

Route::delete('/users/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');


//Route::get('/clients','App\Http\Controllers\ClientsController@index')->name('clients');

Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('car.create');

Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('car.index');

Route::put('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('car.store');

Route::delete('/cars/{car}/destroy', [App\Http\Controllers\CarController::class, 'destroy'])->name('car.destroy');


Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('car.edit');

Route::patch('/cars/{car}/update', [App\Http\Controllers\CarController::class, 'update'])->name('car.update');

Auth::routes();

//Route::middleware('auth')->group(function (){
//    Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
//});
