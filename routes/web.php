<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/lang/{locale}', function (string $locale) {
  if (! in_array($locale, ['en', 'id'])) abort(400);
  app()->setLocale($locale);
  session()->put('locale', $locale);
  return redirect()->back();
})->name('locale');

Route::view('/', 'landing.index')->name('home');
Route::view('vpn-remote', 'landing.vpn-remote');
Route::view('vpn-game', 'landing.vpn-game');
Route::view('mikhmon-online', 'landing.mikhmon-online');
Route::view('ddns', 'landing.ddns');
Route::view('about', 'landing.about')->name('about');
Route::view('contact', 'landing.contact')->name('contact');
Route::view('terms', 'landing.terms')->name('terms');
Route::view('privacy', 'landing.privacy')->name('privacy');
Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

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
    Route::view('users', 'admin.users')->name('users');
    Volt::route('settings/application', 'settings.application')->name('settings.application');
  });
});

require __DIR__ . '/auth.php';
