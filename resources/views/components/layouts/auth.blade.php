<x-layouts.auth.simple :title="$title ?? null" :description="$description ?? null" :keywords="$keywords ?? null">
  {{ $slot }}

  <div class="text-zinc-600 dark:text-zinc-400 flex items-center justify-center gap-2 mt-4 sm:mt-0">
    <flux:link href="{{ route('locale', 'en') }}">
      English
    </flux:link>
    -
    <flux:link href="{{ route('locale', 'id') }}">
      Indonesia
    </flux:link>
  </div>
</x-layouts.auth.simple>
