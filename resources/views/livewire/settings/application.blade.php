<?php

use App\Models\User;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public string $paydia_merchant_id = '';
    public string $paydia_client_key = '';
    public string $paydia_client_secret = '';
    public string $username = '';
    public string $password = '';
    public string $announcement = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $settings = new GeneralSettings();
        $this->paydia_merchant_id = $settings->paydia_merchant_id;
        $this->paydia_client_key = $settings->paydia_client_key;
        $this->paydia_client_secret = $settings->paydia_client_secret;
        $this->username = $settings->username;
        $this->password = $settings->password;
        $this->announcement = $settings->announcement;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateSettings(): void
    {
        $settings = new GeneralSettings();

        $validated = $this->validate([
            'paydia_merchant_id' => 'required|string',
            'paydia_client_key' => 'required|string',
            'paydia_client_secret' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'announcement' => 'string',
        ]);

        $settings->fill($validated);

        if ($settings->save()) {
            $this->dispatch('settings-updated');
        }
    }
}; ?>

<section class="w-full">
  @include('partials.settings-heading')

  <x-settings.layout :heading="__('Application Settings')">
    <form wire:submit.prevent="updateSettings" class="my-6 w-full space-y-6">
      <flux:separator text="Payment Gateway" />
      <flux:input wire:model="paydia_merchant_id" :label="__('Paydia Merchant ID')" type="text" autofocus />
      <flux:input wire:model="paydia_client_key" :label="__('Paydia Client Key')" type="password" viewable />
      <flux:input wire:model="paydia_client_secret" :label="__('Paydia Client Secret')" type="password" viewable />
      <flux:separator text="Api Credectial" />
      <flux:input wire:model="username" :label="__('Username')" type="text" autocomplete="username" />
      <flux:input wire:model="password" :label="__('Password')" type="password" autocomplete="password" viewable />
      <flux:separator />
      <flux:textarea wire:model="announcement" :label="__('Announcement')" type="text" />

      <div class="flex items-center gap-4">
        <div class="flex items-center justify-end">
          <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
        </div>

        <x-action-message class="me-3" on="settings-updated">
          {{ __('Saved.') }}
        </x-action-message>
      </div>
  </x-settings.layout>
</section>
