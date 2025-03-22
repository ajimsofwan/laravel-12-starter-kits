<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @if (request()->path() == '/')
    <meta name="title" content="{{ config('app.name') }}: {{ $title ?? '' }}">
  @endif
  @include('partials.head')
  @vite(['resources/css/landing.css', 'resources/css/aos.css', 'resources/js/aos.js'])
  @include('partials.schema')
</head>

<body class="font-sans antialiased text-zinc-900 bg-zinc-50 dark:bg-zinc-900 dark:text-white/50">
  <div class="bg-gradient-to-br from-blue-100 dark:from-blue-900 to-40%">
    <header>
      <div x-data="{ open: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 0) })"
        x-bind:class="{
            'navbar-blur fixed': scrolled,
            'md:text-zinc-900': scrolled,
        }"
        class="z-50 w-full">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
          <a href="/">
            <x-app-logo />
          </a>
          <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <livewire:landing.nav-button />
            <button type="button" @click="open = !open"
              class="w-10 h-10 py-1.5 px-2 text-sm text-zinc-500 rounded-lg md:hidden hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-zinc-200 dark:text-zinc-white dark:hover:bg-zinc-800/70 dark:focus:ring-zinc-600"
              aria-controls="navbar-cta" aria-expanded="false">
              {{-- <span class="sr-only">Open main menu</span> --}}
              <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
              <span class="transition duration-300 ease-in-out hamburger-line"></span>
              <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
            </button>
          </div>
          <nav :class="{ 'hidden': !open }" x-transition.scale.origin.top
            class="z-40 items-center justify-between w-full md:flex md:w-auto md:order-1">
            <ul
              class="absolute right-0 flex flex-col w-full p-4 mt-4 font-semibold bg-white border rounded-lg border-zinc-100 dark:bg-zinc-800 md:dark:bg-transparent md:relative md:right-auto md:w-auto md:bg-transparent md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-zinc-600">
              <li>
                <a x-bind:class="{
                    'md:text-zinc-600 dark:md:text-white md:no-underline': scrolled,
                    @if (request()->path() == '/') 'md:underline': !scrolled @endif
                }"
                  href="/"
                  class="block px-3 py-2 rounded-md md:p-0 md:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 {{ request()->is('/') ? 'text-primary md:underline-offset-8' : 'text-zinc-600 dark:text-white' }}">
                  Home
                </a>
              </li>
              <li>
                <a href="#about"
                  class="block px-3 py-2 rounded-md text-zinc-600 md:p-0 hover:bg-zinc-100 md:hover:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 dark:text-zinc-50 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent dark:border-zinc-600">
                  {{ __('Tentang Kami') }}
                </a>
              </li>
              <li x-data="{ dropdownService: false }" class="relative">
                <a href="#services" @click="dropdownService = true"
                  class="flex items-center gap-2 px-3 py-2 rounded-md text-zinc-600 md:p-0 hover:bg-zinc-100 md:hover:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 dark:text-zinc-50 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent dark:border-zinc-600">
                  {{ __('Layanan') }}
                  <flux:icon.chevron-down class="w-4 h-4 -mr-2" />
                </a>
                <div @click.outside="dropdownService = false" x-show="dropdownService" x-transition.scale.origin.top
                  x-cloak
                  class="z-50 overflow-hidden text-base list-none bg-white divide-y border-zinc-300 divide-zinc-100 md:w-56 md:border md:my-4 md:absolute top-9 md:rounded-xl dark:border-zinc-700 dark:bg-zinc-800 dark:divide-zinc-600">
                  <ul class="text-zinc-700 md:py-1 dark:text-white" aria-labelledby="dropdown">
                    <li>
                      <a href="/vpn-game"
                        class="block px-6 py-2 text-sm rounded-md md:rounded-none md:px-4 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                        VPN Game</a>
                    </li>
                    <li>
                      <a href="/vpn-remote"
                        class="block px-6 py-2 text-sm rounded-md md:rounded-none md:px-4 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                        VPN Remote</a>
                    </li>
                    <li>
                      <a href="/mikhmon-online"
                        class="block px-6 py-2 text-sm rounded-md md:rounded-none md:px-4 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                        Mikhmon Online</a>
                    </li>
                    <li>
                      <a href="/ddns"
                        class="block px-6 py-2 text-sm rounded-md md:rounded-none md:px-4 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                        DDNS</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#pricing"
                  class="block px-3 py-2 rounded-md text-zinc-600 md:p-0 hover:bg-zinc-100 md:hover:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 dark:text-zinc-50 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent dark:border-zinc-600">
                  {{ __('Harga') }}
                </a>
              </li>
              <li>
                <a href="#contact"
                  class="block px-3 py-2 rounded-md text-zinc-600 md:p-0 hover:bg-zinc-100 md:hover:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 dark:text-zinc-50 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent dark:border-zinc-600">
                  {{ __('Kontak') }}
                </a>
              </li>
              <li>
                <a href="/docs/"
                  class="block px-3 py-2 rounded-md text-zinc-600 md:p-0 hover:bg-zinc-100 md:hover:bg-transparent md:hover:text-primary md:hover:underline md:underline-offset-8 dark:text-zinc-50 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent dark:border-zinc-600">
                  {{ __('Dokumentasi') }}
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      {{ $header ?? '' }}
    </header>
  </div>
  {{ $slot }}
  <footer class="p-4 bg-zinc-50 sm:p-6 dark:bg-zinc-800">
    <div class="max-w-screen-xl mx-auto">
      <div class="md:grid md:grid-cols-3">
        <div class="col-span-2 mb-6 md:mb-0">
          <div class="mb-3">
            <x-app-logo />
          </div>
          <p class="max-w-screen-sm mb-3 text-zinc-500 dark:text-zinc-400">
            {{ config('app.name') }}
            {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting
                                                                                                                                                                                                                                                Mikhmon Online.') }}
          </p>
          <p class="mb-3 text-zinc-500 dark:text-zinc-400">Jl. Rajapolah No.200 <br>
            Rajapolah
            Kab. Tasikmalaya <br>
            Jawa Barat - 46155
          </p>
          <p class="mb-3 text-zinc-500 dark:text-zinc-400">
            &#43;&#54;&#50;&#56;&#53;&#49;&#53;&#53;&#50;&#55;&#52;&#49;&#49;&#49; |
            &#116;&#117;&#110;&#110;&#101;&#108;&#46;&#104;&#101;&#108;&#112;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
          </p>
        </div>
        <div class="grid grid-cols-2 col-span-1 gap-8 sm:gap-6">
          <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-primary ">Menu</h2>
            <ul class="text-zinc-600 dark:text-zinc-400">
              <li class="mb-4">
                <a href="{{ route('about') }}"
                  class="hover:underline hover:text-primary underline-offset-4">{{ __('Tentang') }}</a>
              </li>
              <li class="mb-4">
                <a href="{{ route('contact') }}"
                  class="hover:underline hover:text-primary underline-offset-4">{{ __('Kontak') }}</a>
              </li>
              <li class="mb-4">
                <a href="{{ route('terms') }}"
                  class="hover:underline hover:text-primary underline-offset-4">{{ __('Kebijakan Layanan') }}</a>
              </li>
              <li class="mb-4">
                <a href="{{ route('privacy') }}"
                  class="hover:underline hover:text-primary underline-offset-4">{{ __('Kebijakan Privasi') }}</a>
              </li>
              <li class="mb-4">
                <a href="/docs/"
                  class="hover:underline hover:text-primary underline-offset-4">{{ __('Dokumentasi') }}</a>
              </li>
              <li class="mb-4">
                <a href="https://stats.uptimerobot.com/6xKr3SopOn" target="_blank" rel="noopener noreferrer"
                  class="hover:underline hover:text-primary underline-offset-4">Server Status</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-primary ">{{ __('Layanan') }}</h2>
            <ul class="text-zinc-600 dark:text-zinc-400">
              <li class="mb-4">
                <a href="/vpn-game" class="hover:underline hover:text-primary underline-offset-4">VPN
                  Game</a>
              </li>
              <li class="mb-4">
                <a href="/vpn-remote" class="hover:underline hover:text-primary underline-offset-4">VPN
                  Remote</a>
              </li>
              <li class="mb-4">
                <a href="/mikhmon-online" class="hover:underline hover:text-primary underline-offset-4">Mikhmon
                  Online</a>
              </li>
              <li class="mb-4">
                <a href="/ddns" class="hover:underline hover:text-primary underline-offset-4">DDNS</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-zinc-200 sm:mx-auto dark:border-zinc-600 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="text-sm text-center text-zinc-500 dark:text-zinc-400">© {{ date('Y') }} <a href="/"
            class="hover:text-primary hover:underline underline-offset-4">{{ config('app.name') }} </a>. All
          Rights Reserved.
        </div>
        <div class="flex items-center justify-center gap-2 mt-4 sm:mt-0">
          <a href="{{ route('locale', 'en') }}"
            class="text-sm rounded-md hover:underline underline-offset-4 hover:text-primary">
            English
          </a>
          -
          <a href="{{ route('locale', 'id') }}"
            class="text-sm rounded-md hover:underline underline-offset-4 hover:text-primary">
            Indonesia
          </a>
        </div>
      </div>
    </div>
  </footer>
  @fluxScripts
  @stack('script')
</body>

</html>
