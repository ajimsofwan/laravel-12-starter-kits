<?php

use Livewire\Volt\Component;

new class extends Component {

    public function updateLocale(string $locale): void
    {
        $this->redirect("/lang/{$locale}", navigate: true);
    }
}; ?>

<div class="flex flex-col items-start">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun">{{ __('Light') }}</flux:radio>
            <flux:radio value="dark" icon="moon">{{ __('Dark') }}</flux:radio>
            <flux:radio value="system" icon="computer-desktop">{{ __('System') }}</flux:radio>
        </flux:radio.group>
      <flux:heading class="mt-4">{{ __('Language') }}</flux:heading>
        <flux:radio.group class="mt-3" x-data="{ locale: '{{ session()->get('locale', 'id') }}' }" x-model="locale" variant="segmented"
          x-on:change="$wire.call('updateLocale', locale)">
          <flux:radio value="id">{{ __('Indonesia') }}</flux:radio>
          <flux:radio value="en">{{ __('English') }}</flux:radio>
      </flux:radio.group>
    </x-settings.layout>
</div>
