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
    public bool $terms = false;

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $phone = new Propaganistas\LaravelPhone\PhoneNumber($this->phone);
        $this->phone = $phone->formatE164();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'phone', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::min(8)->mixedCase()->letters()->numbers()->uncompromised()],
            'terms' => ['required', 'accepted'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col gap-6">
  <x-slot:title>Create an account</x-slot>
  <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />
  <!-- Session Status -->
  <x-auth-session-status class="text-center" :status="session('status')" />

  <form wire:submit="register" class="flex flex-col gap-6">
    <!-- Name -->
    <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name"
      :placeholder="__('Full name')" />

    <!-- Email Address -->
    <flux:input wire:model="email" :label="__('Email address')" type="email" required autocomplete="email"
      placeholder="email@example.com" />

    <!-- Phone -->
    <flux:field>
      <flux:label>{{ __('Phone') }}</flux:label>

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

    <flux:checkbox wire:model="terms" label="I agree to the terms and conditions" />

    <div class="flex items-center justify-end">
      <flux:button type="submit" variant="primary" class="w-full">
        {{ __('Create account') }}
      </flux:button>
    </div>
  </form>

  <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
    {{ __('Already have an account?') }}
    <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
  </div>
</div>
@push('headscripts')
  @vite(['resources/js/intl-tel-input.js', 'resources/css/intl-tel-input.css'])
@endpush
