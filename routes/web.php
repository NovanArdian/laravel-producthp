<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
 
use App\Http\Controllers\StokController;
 
Route::get('/', function () {
    return view('welcome');
});

//  khusus untuk route register akun 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// khusus untuk route dashboard
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    //  khusus untuk route CRUD produk
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

// khusus untuk route update profile

use App\Http\Controllers\ProfileController;
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


// khusus untuk route CRUD karyawa

Route::prefix('kelola-karyawan')->name('kelola_karyawan.')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('data');   // Display all users
    Route::get('/tambah', [EmployeeController::class, 'create'])->name('tambah');  // Show create form
    Route::post('/tambah/proses', [EmployeeController::class, 'store'])->name('tambah.proses');  // Process creation
    Route::get('/ubah/{id}', [EmployeeController::class, 'edit'])->name('ubah');   // Show edit form
    Route::patch('/ubah/{id}/proses', [EmployeeController::class, 'update'])->name('ubah.proses');  // Process update
    Route::delete('/hapus/{id}', [EmployeeController::class, 'destroy'])->name('hapus');  // Process deletion
});

// crud khusus stok
Route::prefix('kelola-stok')->name('kelola_stok.')->group(function () {
    Route::get('/', [StokController::class, 'index'])->name('data');   // Display all users
    Route::get('/tambah', [StokController::class, 'create'])->name('tambah');  // Show create form
    Route::post('/tambah/proses', [StokController::class, 'store'])->name('tambah.proses');  // Process creation
    Route::get('/ubah/{id}', [StokController::class, 'edit'])->name('ubah');   // Show edit form
    Route::patch('/ubah/{id}/proses', [StokController::class, 'update'])->name('ubah.proses');  // Process update
    Route::delete('/hapus/{id}', [StokController::class, 'destroy'])->name('hapus');  // Process deletion
});

