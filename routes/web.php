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

Route::get('/', function () {
    return view('admin.auth.login');
});

Auth::routes();

Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Route::get('admin/folder', [App\Http\Controllers\FolderController::class, 'index'])->name('admin.folder.index');
Route::post('admin/folder/store', [App\Http\Controllers\FolderController::class, 'store'])->name('admin.folder.store');
Route::get('admin/folder/images/{folder}', [App\Http\Controllers\FolderController::class, 'folderImage'])->name('admin.folder.images.index');
Route::post('admin/folder/images/store', [App\Http\Controllers\FolderController::class, 'submitFolderImages'])->name('admin.folder.images.store');
