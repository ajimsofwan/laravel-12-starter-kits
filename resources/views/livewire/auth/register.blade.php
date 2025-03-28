<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $turnstile_challenge = '';
    public bool $terms = false;

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'phone', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::min(8)->mixedCase()->letters()->numbers()->uncompromised()],
            'turnstile_challenge' => ['required', 'turnstile'],
            'terms' => ['required', 'accepted'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $phone = new Propaganistas\LaravelPhone\PhoneNumber($validated['phone']);
        $validated['phone'] = $phone->formatE164();
        $user = User::create($validated);
        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col gap-6">
  <x-slot:title>{{ __('Sign up') }}</x-slot>
  <x-slot:description>{{ __('Create an account') }}.</x-slot>
  <x-slot:keywords>{{ __('daftar, sign up, register,') }} {{ strtolower(config('app.name')) }}.</x-slot>
  <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />
  <!-- Session Status -->
  <x-auth-session-status class="text-center" :status="session('status')" />

  <form wire:submit="register" class="flex flex-col gap-6">
    <!-- Name -->
    <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name"
      :placeholder="__('Full name')" />

    <!-- Email Address -->
    <flux:input wire:model="email" :label="__('Email address')" type="email" required autocomplete="email"
      placeholder="jhon@mail.com" />

    <!-- Phone -->
    <flux:field>
      <flux:label>{{ __('Phone number') }}</flux:label>
      <div wire:ignore>
        <flux:input id="intl-tel-input" type="text" />
      </div>
      <flux:input wire:model="phone" type="hidden" name="phone" />
      <flux:error name="phone" />
    </flux:field>

    <!-- Password -->
    <flux:input wire:model="password" :label="__('Password')" type="password" required autocomplete="new-password"
      :placeholder="__('Password')" />

    <!-- Confirm Password -->
    <flux:input wire:model="password_confirmation" :label="__('Confirm password')" type="password" required
      autocomplete="new-password" :placeholder="__('Confirm password')" />

    <div class="inline-flex items-center">
      <flux:checkbox wire:model="terms" />
      <input wire:model="terms" type="checkbox" id="terms" class="hidden">
      <label for="terms" class="inline-flex items-center">
        <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Agree with') }} <flux:link
            :href="route('terms')">{{ __('Terns of Service') }}</flux:link> {{ __('and') }} <flux:link
            :href="route('privacy')">{{ __('Privacy Policy') }}</flux:link>
        </span>
      </label>
    </div>
    <flux:error name="terms" />

    <!-- Cloudflare Turnstile -->
    <div>
      <x-turnstile wire:model="turnstile_challenge" data-theme="auto" data-size="flexible"
        data-language="{{ str_replace('_', '-', app()->getLocale()) }}" />
      <flux:error name="turnstile_challenge" />
    </div>

    <div class="flex items-center justify-end">
      <flux:button type="submit" variant="primary" class="w-full">
        {{ __('Create account') }}
      </flux:button>
    </div>
  </form>

  <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
    {{ __('Already have an account?') }}
    <flux:link :href="route('login')">{{ __('Log in') }}</flux:link>
  </div>
</div>
@push('headscripts')
  @vite(['resources/js/intl-tel-input.js', 'resources/css/intl-tel-input.css'])
@endpush
