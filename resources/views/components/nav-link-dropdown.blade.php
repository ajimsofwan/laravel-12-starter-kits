@props(['active', 'icon' => 'play-circle'])

<a {{ $attributes }} @click="open = !open"
  class="flex w-full font-medium text-zinc-600 hover:bg-primary/10 dark:text-zinc-300 {{ $active ?? false ? 'active' : '' }}"
  :aria-expanded="open.toString()">
  <div class="flex flex-1 items-center px-6 py-2.5 w-full group">
    <div class="flex-shrink-0 size-5 group-hover:text-primary dark:group-hover:text-primary-light">
      <flux:icon name="{{ $icon }}" class="size-5" />
    </div>
    <div class="flex-1 ml-3 text-left whitespace-nowrap group-hover:text-primary dark:group-hover:text-primary-light">
      {{ $slot }}</div>
    <svg aria-hidden="true" class="size-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
  </div>
  <div class="flex-none w-1 my-1.5 bg-primary rounded-l-md {{ $active ?? false ? '' : 'hidden' }}">
  </div>
</a>