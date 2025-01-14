<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'home'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/home', function() {
//     $title = 'home';
//     return view('home', compact('title'));
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// karyawan
Route::middleware('auth')->group(function () {
    Route::get('/attendance', [AttendanceController::class, 'Index'])->name('index.attendance');
});

require __DIR__.'/auth.php';
