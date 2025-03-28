@if (Route::has('login'))
<div class="flex justify-end">
  @auth
  <a href="{{ url('/dashboard') }}"
    class="items-center justify-center hidden px-4 py-2 text-sm font-medium text-center text-white bg-primary rounded-full md:inline-flex hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary dark:hover:bg-primary dark:focus:ring-blue-800">
    {{ __('Dashboard') }}
    <svg class="w-3.5 h-3.5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
  </a>
  <a href="{{ route('dashboard') }}"
    class="px-3 py-2 mr-2 font-bold text-gray-600 rounded-md md:hidden hover:text-primary dark:text-white dark:hover:text-primary dark:focus-visible:ring-white">
    {{ __('Dashboard') }}
  </a>
  @else
  @if (Route::has('register'))
  {{-- <a href="{{ route('register') }}"
    class="px-3 py-2 mr-2 font-bold text-gray-600 rounded-md hover:text-primary dark:text-white dark:hover:text-primary dark:focus-visible:ring-white">
    {{ __('Daftar') }}
  </a> --}}
  <a href="{{ route('login') }}"
    class="flex items-center gap-1 px-3 py-2 mr-2 font-bold text-gray-600 rounded-md md:hidden hover:text-primary dark:text-white dark:hover:text-primary dark:focus-visible:ring-white">
    {{ __('Masuk') }}
    <flux:icon.arrow-right class="w-4 h-4 -mr-4" />
  </a>
  @endif
  <a href="{{ route('login') }}"
    class="items-center justify-center hidden px-4 py-2 text-sm font-bold text-center text-white bg-primary rounded-full md:inline-flex hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary dark:hover:bg-primary dark:focus:ring-blue-800">
    {{ __('Masuk') }}
    <svg class="w-3.5 h-3.5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="ev enodd"
        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
  </a>
  @endauth
</div>
@endif