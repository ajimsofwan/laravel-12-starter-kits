@props(['active', 'icon' => 'play-circle'])

<li>
  <a {{ $attributes }}
    class="flex text-zinc-600 dark:text-zinc-300 hover:bg-primary/10 {{ $active ?? false ? 'active' : '' }}">
    <div class="flex items-center flex-1 px-6 py-2.5 group">
      <span class="flex-shrink-0 size-5 group-hover:text-primary dark:group-hover:text-primary-light">
        <flux:icon name="{{ $icon }}" class="size-5" />
      </span>
      <span class="ml-3 group-hover:text-primary dark:group-hover:text-primary-light">{{ $slot }}</span>
    </div>
    <div class="flex-none rounded-l-md w-1 my-1.5 bg-primary {{ $active ?? false ? '' : 'hidden' }}">
    </div>
  </a>
</li>