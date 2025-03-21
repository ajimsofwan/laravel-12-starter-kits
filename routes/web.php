<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
  Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
  // admin
  Route::middleware(['role:admin|moderator'])->group(function () {
    Volt::route('settings/application', 'settings.application')->name('settings.application');
  });
});

require __DIR__ . '/auth.php';
