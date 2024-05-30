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
Route::get('admin/order_by_form', [App\Http\Controllers\OrderController::class, 'orderCreationByForm'])->name('admin.orders.form');
Route::post('admin/order/store', [App\Http\Controllers\OrderController::class, 'orderCreationFormStore'])->name('admin.orders.form.store');
Route::get('admin/order_by_csv', [App\Http\Controllers\OrderController::class, 'orderCreationByCSV'])->name('admin.orders.csv');

Route::post('admin/folder/store', [App\Http\Controllers\FolderController::class, 'store'])->name('admin.folder.store');
Route::get('admin/folder/images/{folder}', [App\Http\Controllers\FolderController::class, 'folderImage'])->name('admin.folder.images.index');
Route::post('admin/folder/images/store', [App\Http\Controllers\FolderController::class, 'submitFolderImages'])->name('admin.folder.images.store');
