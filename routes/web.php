<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminGameController;
use App\Http\Controllers\ProfileController;
use App\Models\GamePost; // Penting: Menghindari error "Class not found"
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Nexus Gaming - Public Routes
|--------------------------------------------------------------------------
*/

// Halaman depan yang menampilkan semua kartu review game
Route::get('/', [GameController::class, 'index'])->name('home');

// Halaman detail review game berdasarkan slug
Route::get('/review/{slug}', [GameController::class, 'show'])->name('game.show');


/*
|--------------------------------------------------------------------------
| Nexus Gaming - Admin & Dashboard Routes (Must be Logged In)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard: Menampilkan tabel manajemen game
    // Mengambil data agar tidak muncul error "Undefined variable $posts"
    Route::get('/dashboard', function () {
        $posts = GamePost::latest()->get(); 
        return view('dashboard', compact('posts'));
    })->name('dashboard');

    // CRUD: Fitur Tambah, Simpan, Edit, Update, dan Hapus Review Game
    Route::get('/admin/game/create', [AdminGameController::class, 'create'])->name('admin.game.create');
    Route::post('/admin/game/store', [AdminGameController::class, 'store'])->name('admin.game.store');
    Route::get('/admin/game/{post}/edit', [AdminGameController::class, 'edit'])->name('admin.game.edit');
    Route::put('/admin/game/{post}', [AdminGameController::class, 'update'])->name('admin.game.update');
    Route::delete('/admin/game/{post}', [AdminGameController::class, 'destroy'])->name('admin.game.destroy');

    // Profile Management (Bawaan Laravel Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';