<?php

use App\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(3);

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Livewire\Dashboard::class)->name('dashboard');
    Route::get('/profile', Livewire\Profile::class)->name('profile');
});



require __DIR__ . '/auth.php';
