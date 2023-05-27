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

    Route::get('/notifications', [PagesController::class, 'notifications'])->name('notifications');
    Route::get('/messages', [PagesController::class, 'messages'])->name('messages');
    Route::get('/friends', [PagesController::class, 'friends'])->name('friends');
});
