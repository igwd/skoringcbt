<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\Dashboard::class)->name('dashboard');