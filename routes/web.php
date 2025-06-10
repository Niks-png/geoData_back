<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

// Home page (countries index)
Route::get('/', [CountryController::class, 'index'])->name('countries.index');

// Create country
Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');

// Show single country
Route::get('/countries/{country}', [CountryController::class, 'show'])->name('countries.show');

// Edit country
Route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{country}', [CountryController::class, 'update'])->name('countries.update');

// Delete country
Route::delete('/countries/{country}', [CountryController::class, 'destroy'])->name('countries.destroy');