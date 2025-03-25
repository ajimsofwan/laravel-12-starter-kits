<td x-data="{ show: false }" @click.outside="show = false"
  {{ $attributes->merge(['class' => 'px-2 py-3 cursor-pointer md:px-6 text-nowrap']) }}>
  <button @click="show = !show" x-cloak
    class="flex items-center gap-1 py-1 pl-2 pr-1 m-0 text-xs font-semibold tracking-widest text-gray-700 uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25">
    <flux:icon.ellipsis-horizontal class="size-6" />
    <flux:icon.chevron-down stroke-width="2.5" class="size-3" />
  </button>
  <div x-show="show" x-cloak
    class="absolute z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
    {{ $slot }}
  </div>
</td>
