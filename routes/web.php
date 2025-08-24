<?php

use App\Livewire\Story;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
})->name('homepage.index');

Route::get('/story', function () {
    return view('story.index');
})->name('story.index');
