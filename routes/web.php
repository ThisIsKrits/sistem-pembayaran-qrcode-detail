<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WifiPackageController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('bayar/{id}', [HomeController::class, 'generate'])->name('generate');
Route::get('/home/cari',[HomeController::class, 'cari'])->name('cari');

Route::get('transaction/{id}', [TransactionController::class, 'create'])->name('transaction');
Route::post('transaction/proses/{id}', [TransactionController::class, 'proses'])->name('transaction-proses');
Route::get('detail/{id_transaksi}',[DetailController::class, 'index'])->name('transaction-detail');
Route::post('detail/upload/{id}', [DetailController::class, 'upload'])->name('transaction-upload');
Route::get('detail/success/{id}',[DetailController::class,'success'])->name('transaction-success');


Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('wifi-package', WifiPackageController::class);
        Route::resource('payment', PaymentController::class);
        Route::resource('transaction', App\Http\Controllers\Admin\TransactionController::class);
        Route::resource('user', UserController::class);
        Route::get('qrcode/{id}', [WifiPackageController::class, 'generate'])->name('generate');
    });

Auth::routes();
