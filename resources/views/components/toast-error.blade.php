@props(['on' => 'error', 'message' => 'Eerror'])

<div x-data="{ shown: false, timeout: null }" x-init="@this.on('{{ $on }}', () => {
    clearTimeout(timeout);
    shown = true;
    timeout = setTimeout(() => { shown = false }, 2000);
})" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms
  style="display: none;" {{ $attributes->merge(['class' => 'fixed inset-x-0 md:inset-x-auto z-50 flex items-center
  justify-center top-20 md:right-10']) }}
  role="alert">
  <div
    class="flex items-center px-4 py-3 mb-4 text-red-600 bg-white border border-gray-300 shadow-2xl md:ml-64 min-w-72 dark:border-gray-600 rounded-xl dark:bg-gray-800 dark:text-red-400"
    role="alert">
    <span class="p-1 mr-3 bg-red-200 rounded-full dark:bg-red-800">
      <flux:icon.x-circle class="size-6" />
    </span>
    <div>
      <span class="text-sm font-medium">{{ __($message) }}</span>
    </div>
  </div>
</div>