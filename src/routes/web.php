<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;
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
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile-dashboard', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile-pic-update', [App\Http\Controllers\ProfileController::class, 'upload'])->name('profile-pic-upload');
    Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->middleware(['auth'])->name('profile.edit');

});