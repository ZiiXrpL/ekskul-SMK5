<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Http\Controllers\Admin\PendaftaranController as AdminPendaftaranController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ekstrakurikuler/{id}', [HomeController::class, 'show'])->name('ekstrakurikuler.show');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User Pendaftaran
    Route::get('/pendaftaran/{ekstrakurikuler_id}', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::get('pendaftaran', [AdminPendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::post('pendaftaran/{id}/approve', [AdminPendaftaranController::class, 'approve'])->name('pendaftaran.approve');
    Route::post('pendaftaran/{id}/reject', [AdminPendaftaranController::class, 'reject'])->name('pendaftaran.reject');
});
