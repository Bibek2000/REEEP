<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('layouts.app1');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('menus', \App\Http\Controllers\Backend\MenuController::class);
Route::patch('/status/approval/{id}', [\App\Http\Controllers\Backend\MenuController::class, 'statusApproval'])->name('status.approval');
Route::get('/index', [\App\Http\Controllers\Backend\MenuController::class, 'views'])->name('views.navElement');
