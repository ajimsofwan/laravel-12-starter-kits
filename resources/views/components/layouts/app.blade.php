<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
  @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

  <flux:sidebar sticky stashable
    class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800 px-0 shadow-lg">
    <div class="flex justify-between items-end px-4">
      <div class="mr-5 flex items-center space-x-2">
        <x-app-logo />
      </div>
      <flux:sidebar.toggle class="lg:hidden dark:text-accent" icon="arrow-left" />
    </div>
    <flux:navlist variant="outline">
      <ul class="text-sm font-medium">
        <x-nav-link icon="home" :href="route('dashboard')" :active="request()->is('dashboard*')" wire:navigate>
          {{ __('Dashboard') }}
        </x-nav-link>
        @role('admin|moderator')
        <x-nav-link icon="users" :href="route('users')" :active="request()->is('users')" wire:navigate>
          {{ __('Users') }}
        </x-nav-link>
        @endrole
        <li x-data="{ open: {{ request()->is('settings*') ? 'true' : 'false' }} }">
          <x-nav-link-dropdown icon="server" :active="request()->is('settings*')">
            {{ __('Settings') }}
          </x-nav-link-dropdown>
          <ul x-show="open" x-transition.scale.opacity.origin.top.duration.300ms x-cloak>
            @role('admin')
            <x-nav-link-dropdown-item :href="route('settings.application')"
              :active="request()->routeIs('settings.application')" wire:navigate>
              {{ __('Application') }}
            </x-nav-link-dropdown-item>
            @endrole
            <x-nav-link-dropdown-item :href="route('settings.profile')" :active="request()->routeIs('settings.profile')"
              wire:navigate>
              {{ __('Profile') }}
            </x-nav-link-dropdown-item>
            <x-nav-link-dropdown-item :href="route('settings.password')"
              :active="request()->routeIs('settings.password')" wire:navigate>
              {{ __('Password') }}
            </x-nav-link-dropdown-item>
            <x-nav-link-dropdown-item :href="route('settings.appearance')"
              :active="request()->routeIs('settings.appearance')" wire:navigate>
              {{ __('Appearance') }}
            </x-nav-link-dropdown-item>
          </ul>
        </li>
      </ul>
    </flux:navlist>

    <flux:spacer />

    <flux:navlist variant="outline" class="px-4">
      <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
        {{ __('Repository') }}
      </flux:navlist.item>

      <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
        {{ __('Documentation') }}
      </flux:navlist.item>
    </flux:navlist>

    <!-- Desktop User Menu -->
    <flux:dropdown position="bottom" align="start" class="px-4">
      <flux:profile :name="auth()->user()->name" icon-trailing="chevrons-up-down" avatar:color="blue"
        initials="{{ auth()->user()->initials() }}" />

      <flux:menu class="w-[220px]">
        <flux:menu.radio.group>
          <div class="p-0 text-sm font-normal">
            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
              <flux:avatar name="{{ auth()->user()->name }}" color="blue" initials="{{ auth()->user()->initials() }}" />

              <div class="grid flex-1 text-left text-sm leading-tight">
                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
              </div>
            </div>
          </div>
        </flux:menu.radio.group>

        <flux:menu.separator />

        <flux:menu.radio.group>
          <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
        </flux:menu.radio.group>

        <flux:menu.separator />

        <form method="POST" action="{{ route('logout') }}" class="w-full">
          @csrf
          <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
            {{ __('Log Out') }}
          </flux:menu.item>
        </form>
      </flux:menu>
    </flux:dropdown>
  </flux:sidebar>
  <!-- Mobile User Menu -->
  <flux:header sticky class="bg-zinc-50 dark:bg-zinc-800 border-b border-zinc-200 dark:border-zinc-700 shadow-lg">

    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:spacer />

    <flux:dropdown>
      @php($locale = ['en' => 'English', 'id' => 'Indonesia'])
      <flux:button variant="ghost" icon:trailing="chevron-down">
        <flux:icon.language class="size-5" /> <span class="hidden md:block">{{ $locale[session()->get('locale', 'id')]
          }}</span>
      </flux:button>
      <flux:menu class="mt-2">
        <flux:navmenu.item href="{{ route('locale', ['locale' => 'id']) }}" wire:navigate>Indonesia</flux:navmenu.item>
        <flux:navmenu.item href="{{ route('locale', ['locale' => 'en']) }}" wire:navigate>English</flux:navmenu.item>
      </flux:menu>
    </flux:dropdown>

    <div x-data>
      <button x-show="$flux.appearance == 'dark' || $flux.appearance == 'system'" @click="$flux.appearance = 'light'"
        x-transition:enter.scale.80 x-cloak type="button"
        class="p-2 mr-2 text-zinc-500 rounded-lg hover:text-amber-400 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:text-amber-400 dark:hover:bg-zinc-700 focus:ring-4 focus:ring-zinc-300 dark:focus:ring-zinc-600">
        <flux:icon.sun variant="solid" class="size-6" />
      </button>
      <button x-show="$flux.appearance == 'light'" @click="$flux.appearance = 'dark'" x-transition:enter.scale.80
        x-cloak type="button"
        class="p-2 mr-2 text-zinc-500 rounded-lg hover:text-amber-400 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:text-amber-400 dark:hover:bg-zinc-700 focus:ring-4 focus:ring-zinc-300 dark:focus:ring-zinc-600">
        <flux:icon.moon variant="solid" class="size-6" />
      </button>
    </div>
  </flux:header>

  <flux:main class="dark:bg-zinc-900 p-0! flex flex-col justify-between min-h-max">
    <div class="p-4">
      {{ $slot }}
    </div>
    <footer
      class="h-auto p-4 pt-5 text-sm text-center border-t text-zinc-600 border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-400">
      Copyright {{ date('Y') }} &copy; {{ config('app.name', 'Laravel') }} v2.0
    </footer>
  </flux:main>

  @fluxScripts

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.magic('clipboard', () => subject => {
        navigator.clipboard.writeText(subject)
      })
    });
  </script>
</body>

</html>