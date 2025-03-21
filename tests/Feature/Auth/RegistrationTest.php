<?php

use Livewire\Volt\Volt;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $this->artisan('db:seed', ['--class' => 'RolePermissionSeeder']);

    $response = Volt::test('auth.register')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('phone', '+6281234567890')
        ->set('password', 'My-Password00')
        ->set('password_confirmation', 'My-Password00')
        ->set('turnstile_challenge', 'chaptcha')
        ->set('terms', 'accepted')
        ->call('register');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});