<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')
  @stack('headscripts')
  @turnstileScripts()
</head>

<body class="min-h-screen bg-zinc-100 antialiased dark:bg-linear-to-b dark:from-zinc-950 dark:to-zinc-900">
  <div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-md flex-col gap-6">
      <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
        <span class="flex items-center justify-center rounded-md">
          <x-app-logo-icon class="size-14 fill-current text-black dark:text-white" />
        </span>

        <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
      </a>

      <div class="flex flex-col gap-6">
        <div class="rounded-xl border bg-white dark:bg-zinc-950 dark:border-zinc-800 text-zinc-800 shadow-xs">
          <div class="px-10 py-8">{{ $slot }}</div>
        </div>
      </div>
    </div>
  </div>
  @fluxScripts
  @stack('scripts')
</body>

</html>