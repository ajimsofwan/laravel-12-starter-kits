@props(['active'])

<li>
  <a {{ $attributes }}
    class="flex items-center w-full font-medium transition duration-75 pl-8 group hover:text-primary dark:hover:text-primary-light {{ $active ?? false ? 'text-primary dark:text-primary-light' : 'text-zinc-600 dark:text-zinc-300' }}">
    <span class="w-2 -mr-2 border-t border-zinc-500 bg-zinc-700">
    </span>
    <span class="px-6 py-2 border-l border-zinc-500">
      {{ $slot }}
    </span>
  </a>
</li>