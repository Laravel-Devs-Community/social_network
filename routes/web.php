<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController ;

Route::get('/', [PagesController::class,'home'])->name('home')->middleware('guest');
Route::get('/test', [PagesController::class,'test']);
Route::get('/test2', [PagesController::class,'test2']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/', \App\Http\Livewire\Posts\Index::class)->name('home');


    Route::get('/me', [PagesController::class,'me'])->name('me');
    Route::get('/notifications', \App\Http\Livewire\Notifications\Index::class)->name('notifications');
    Route::get('/messages', \App\Http\Livewire\Messages\Index::class)->name('messages');
    Route::get('/friends', \App\Http\Livewire\Friends\Index::class)->name('friends');
});
