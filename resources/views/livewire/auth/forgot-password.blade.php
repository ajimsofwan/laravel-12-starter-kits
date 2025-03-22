<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';
    public string $turnstile_challenge = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
            'turnstile_challenge' => ['required', 'turnstile'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('A reset link will be sent if the account exists.'));
    }
}; ?>

<div class="flex flex-col gap-6">
  <x-slot:title>{{ __('Forgot Password') }}</x-slot>
  <x-slot:description>{{ __('Enter your email to receive a password reset link.') }}</x-slot>
  <x-slot:keywords>{{ __('forgot password') }} {{ strtolower(config('app.name')) }}</x-slot>
  <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

  <!-- Session Status -->
  <x-auth-session-status class="text-center" :status="session('status')" />

  <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
    <!-- Email Address -->
    <flux:input wire:model="email" :label="__('Email Address')" type="email" required autofocus
      placeholder="email@example.com" />

    <!-- Cloudflare Turnstile -->
    <div>
      <x-turnstile wire:model="turnstile_challenge" data-theme="auto" data-size="flexible"
        data-language="{{ str_replace('_', '-', app()->getLocale()) }}" />
      <flux:error name="turnstile_challenge" />
    </div>

    <flux:button variant="primary" type="submit" class="w-full">{{ __('Email password reset link') }}</flux:button>
  </form>

  <div class="space-x-1 text-center text-sm text-zinc-400">
    {{ __('Or, return to') }}
    <flux:link :href="route('login')">{{ __('log in') }}</flux:link>
  </div>
</div>
