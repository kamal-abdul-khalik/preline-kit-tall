<?php

use App\Livewire;
use App\Livewire\Posts\PostIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(2);

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Livewire\Dashboard::class)->name('dashboard');
    Route::get('/profile', Livewire\Profile::class)->name('profile');
});

Route::middleware('permission:index posts')->group(function () {
    Route::get('/admin/posts', PostIndex::class)->name('posts.index');
});



require __DIR__ . '/auth.php';
