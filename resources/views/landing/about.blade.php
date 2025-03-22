<x-layouts.landing>
  <x-slot:title>{{ __('Tentang') }}</x-slot>
  <x-slot:description>{{ config('app.name') }} {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting Mikhmon Online yang berdiri sejak tahun 2021.') }}</x-slot>
  <x-slot:keywords>tentang, about, {{ strtolower(config('app.name')) }}.</x-slot>
  <x-slot:header>
    <section class="mb-24 md:mb-20">
      <div class="max-w-screen-xl px-4 py-16 mx-auto text-center lg:px-12">
        <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary lg:text-5xl">
          {{ __('Tentang') }} {{ config('app.name') }}</h1>
      </div>
    </section>
  </x-slot:header>
  <section class="pb-20 text-zinc-600 dark:text-zinc-400 bg-zinc-50 dark:bg-[#171f2e]">
    <div class="px-4 py-4 dark:bg-zinc-800">
      <div
        class="max-w-screen-lg px-8 py-10 mx-auto -mt-40 space-y-4 border border-zinc-300 md:py-16 md:px-12 rounded-xl dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800">
        <p class="mb-4">{{ config('app.name') }}
          {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting
                          Mikhmon Online yang berdiri sejak tahun 2021.') }}
        </p>
        <p class="mb-4">
          {{ __('Banyak orang yang ingin mengakses router atau device serperti mikrotik atau sever lokal namun
                          tidak memiliki IPv4 maka dari itu kami menyediakan layanan VPN Remote sebagai solusi masalah tersebut.') }}
        </p>
        <p class="mb-4">
          {{ __('Kami juga menyediakan Layanan VPN Game untuk routing trafik game yang bertujuan untuk
                          meningkatkan stabilitas koneksi ke server game.') }}
        </p>
        <p class="mb-4">
          {{ __('Selain itu kami menyediakan hosting untuk aplikasi Mikhmon. Yang mana mikhmon yang biasanya hanya
                          bisa di akses secara lokal kini bisa diakses secara online dengan mudah.') }}
        </p>
      </div>
    </div>
  </section>
</x-layouts.landing>
