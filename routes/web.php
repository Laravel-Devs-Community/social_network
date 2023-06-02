<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController ;

Route::get('/', [PagesController::class,'home'])->name('home');

Route::get('/test', function () {
    return view('test');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/notifications', \App\Http\Livewire\Notifications\Index::class)->name('notifications');
    Route::get('/messages', \App\Http\Livewire\Messages\Index::class)->name('messages');
    Route::get('/friends', \App\Http\Livewire\Friends\Index::class)->name('friends');
});
