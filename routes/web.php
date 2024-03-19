<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use App\Models\barang;
use App\Models\Barang as ModelsBarang;
use Illuminate\Support\Facades\Auth;
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


/*
Route::get('/asda', function () {
    return view('welcome');
});
*/


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

//role : Superadmin & Admin 
Route::middleware(['role'])->group(function (){
    route::get('/admin', [SuperAdminController::class, 'admin'])->name('admin');
    Route::get('/tambah-barang', [BarangController::class, 'form']);
    Route::post('/tambah-sukses', [BarangController::class, 'inputbarang'])->name('input.get');
    Route::delete('/hapus-barang/{id}', [BarangController::class, 'deletebarang'])->name('barang-delete');
    Route::get('/update-barang/{id}', [BarangController::class, 'updatebarang'])->name('barang-update');
    Route::put('/update-sukses/{id}', [BarangController::class, 'suksesupdate'])->name('update.get');
});

Route::get('/mahasiswa', [AdminController::class, 'mahasiswa'])->name('mahasiswa');




Route::get('/barang', [BarangController::class, 'barang'])->name('barang');



//role : Mahasiswa
