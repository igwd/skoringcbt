<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\Dashboard\Dashboard::class)->name('dashboard');

Route::get('periode', App\Http\Livewire\Periode\Periode::class)->name('periode');

Route::get('dayatampung', App\Http\Livewire\Dayatampung\Index::class)->name('dayatampung');

Route::get('skoring', App\Http\Livewire\Skoring\Index::class)->name('skoring');