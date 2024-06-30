<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\Dashboard\Main::class)->name('dashboard');

Route::get('periode', App\Http\Livewire\Periode\Main::class)->name('periode');

Route::get('dayatampung', App\Http\Livewire\Dayatampung\Main::class)->name('dayatampung');

Route::get('skoring', App\Http\Livewire\Skoring\Main::class)->name('skoring');