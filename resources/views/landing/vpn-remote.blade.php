<x-layouts.landing>
  <x-slot:title>{{ __('Layanan VPN Remote') }}</x-slot>
  <x-slot:description>{{ __('Akses remote ke device dan router Anda dimanapun kapanpun dengan layanan VPN Remote dari') }}
    {{ config('app.name', 'Laravel') }}.</x-slot>
  <x-slot:keywords>vpn remote mikrotik, mikrotik remote access vpn, mikrotik vpn remote access, remote vpn mikrotik,
    remote mikhmon.</x-slot:keywords>
  <x-slot:header>
    <section id="hero" x-data="{ show: false }" x-init="show = true">
      <div
        class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 text-center md:mt-0 md:text-left" data-aos="fade-down">
          <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary md:text-5xl lg:text-6xl">
            {{ __('Layanan VPN Remote') }}</h1>
          <p class="mb-6 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
            {{ __('Akses remote ke device dan router Anda dimanapun kapanpun dengan layanan VPN Remote dari') }}
            {{ config('app.name', 'Laravel') }}.</p>
          <div class="flex items-center justify-center gap-x-3 md:justify-start">
            <a href="#pricing"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white transition-transform duration-500 transform rounded-full bg-primary hover:-translate-y-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Lihat Harga') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
            <a href="/docs/category/vpn-remote/" target="_blank" rel="nofollow, noopener"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center transition-transform duration-500 transform border-2 rounded-full text-primary border-primary dark:border-white dark:text-white hover:-translate-y-2 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Dokumentasi') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </div>
        <div data-aos="fade-left">
          <x-image-network />
        </div>
      </div>
    </section>
  </x-slot:header>
  <section id="feature" class="bg-blue-50 dark:bg-zinc-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
      <div data-aos="fade-down" class="mb-8 text-center lg:mb-16">
        <h2 class="mb-4 text-4xl font-semibold tracking-tight text-primary ">{{ __('Kenapa Kami?') }}</h2>
        <p class="text-zinc-600 sm:text-xl dark:text-zinc-400">
          {{ __('Ini adalah alasan kenapa Anda harus menggunakan') }}
          {{ __('VPN Remote') }}
          {{ __('dari') }}
          {{ config('app.name', 'Laravel') }}.
        </p>
      </div>
      <div data-aos="fade-up" class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <div class="text-center">
          <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
            <flux:icon.bolt class="size-max text-primary dark:text-primary-light" />
          </div>
          <h3 class="mb-2 text-xl font-semibold text-zinc-700 dark:text-zinc-200">{{ __('Cepat & Stabil') }}</h3>
          <p class="text-zinc-600 dark:text-zinc-400">
            {{ __('Server stabil dan memiliki koneksi kecepatan hingga 1 Gbps.') }}
          </p>
        </div>
        <div class="text-center">
          <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
            <flux:icon.cog-6-tooth class="size-max text-primary dark:text-primary-light" />
          </div>
          <h3 class="mb-2 text-xl font-semibold text-zinc-700 dark:text-zinc-200">{{ __('Konfigurasi Mudah') }}</h3>
          <p class="text-zinc-600 dark:text-zinc-400">
            {{ __('Tersedia panduan instant untuk setup layanan kami.') }}
          </p>
        </div>
        <div class="text-center">
          <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
            <flux:icon.chat-bubble-oval-left-ellipsis class="size-max text-primary dark:text-primary-light" />
          </div>
          <h3 class="mb-2 text-xl font-semibold text-zinc-700 dark:text-zinc-200">{{ __('Dukungan Gratis') }}</h3>
          <p class="text-zinc-600 dark:text-zinc-400">
            {{ __('Kami siap membantu untuk setiap permasalahan secara gratis.') }}
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="article" class="bg-white dark:bg-zinc-900">
    <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
      <div class="mt-4 md:mt-0" data-aos="fade-up">
        <h2 class="mb-4 text-2xl font-semibold tracking-tight text-primary md:text-4xl ">
          {{ __('Kemudahan Akses Device Mikrotik atau Device Lain Dimanapun') }}</h2>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Salah satu layanan kami adalah VPN Remote. VPN Remote merupakan layanan yang menggunakan OpenVPN yang berfungsi untuk meremote perangkat diluar jaringan sebagai alternatif bagi kamu yang tidak mempunya IP Public.') }}
        </p>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Layanan VPN Remote Menjadi solusi untuk kamu yang sering bekerja dari jarak jauh atau membutuhkan akses jaringan dari suatu tempat dari lokasi yang berbeda.') }}
        </p>
        <p class="mb-6 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Layanan ini bisa kamu gunakan untuk mengakses service mikrotik serperti Winbox, API, Webfig atau bisa juga device lain yang mendukung OpenVPN.') }}
        </p>
      </div>
      <div data-aos="fade-right" class="max-w-md md:order-first">
        <x-image-network />
      </div>
    </div>
  </section>
  <section id="pricing" class="bg-blue-50 dark:bg-zinc-800">
    <div class="max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-3 sm:py-16 lg:px-6">
      <div data-aos="fade-up" class="col-span-2 mt-4 md:mt-0">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-primary ">{{ __('Harga') }}
        </h2>
        <p class="mb-6 font-light text-zinc-500 md:text-lg dark:text-zinc-400">
          {{ __('Berikut harga yang ditawarkan untuk layanan ini.') }}</p>
        <div class="grid gap-4 mb-5 md:grid-cols-3">
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            OpenVPN/L2TP
          </div>
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            {{ __('Tersedia File .ovpn') }}
          </div>
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            {{ __('Mendukung Multi Port') }}
          </div>
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            2-5 Mbps Speed Limit
          </div>
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            Unlimited Bandwidth
          </div>
          <div class="flex items-center gap-2">
            <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
            SG, ID, FR Datacenter
          </div>
        </div>
      </div>
      <div data-aos="fade-left"
        class="col-span-1 px-6 py-8 text-center bg-white border rounded-lg shadow border-zinc-200 dark:bg-zinc-700 dark:border-zinc-600">
        <div>
          <span class="text-lg font-bold text-zinc-700 dark:text-zinc-300">{{ __('Bulanan') }}</span>
        </div>
        <div class="py-4 text-primary">
          <span>RP</span>
          <span class="text-6xl font-bold tracking-tight ">2rb</span>
          <span>/port</span>
        </div>
        <a href="{{ route('register') }}" target="_blank"
          class="inline-flex items-center justify-center px-5 py-2 mt-2 text-base font-medium text-center text-white transition-transform duration-500 transform rounded-full bg-primary hover:-translate-y-1 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
          {{ __('Daftar') }}
          <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
        </a>
      </div>
    </div>
  </section>
  <section id="faqs" class="bg-white dark:bg-zinc-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
      <h2 data-aos="fade-down" class="mb-8 text-4xl font-semibold tracking-tight text-primary ">
        {{ __('Pertanyaan yang Sering Diajukan') }}
      </h2>
      <div data-aos="fade-up"
        class="grid pt-8 text-left border-t border-zinc-200 md:gap-16 dark:border-zinc-600 md:grid-cols-2">
        <div>
          <div class="mb-10">
            <h3 class="flex items-center mb-4 text-lg font-medium text-primary ">
              <svg class="flex-shrink-0 w-5 h-5 mr-2 text-zinc-600 dark:text-zinc-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                  clip-rule="evenodd"></path>
              </svg>
              {{ __('Apakah VPN Remote hanya digunakan untuk Mikrotik?') }}
            </h3>
            <p class="mb-3 text-zinc-600 dark:text-zinc-400">
              {{ __('VPN Remote dapat digunakan untuk Mikrotik dan device lain yang mendukung OpenVPN. Anda juga dapat menggunakan layanan ini untuk device yang terhubung ke router Mikrotik dengan menggunakan port forwarding.') }}
            </p>
          </div>
        </div>
        <div>
          <div class="mb-10">
            <h3 class="flex items-center mb-4 text-lg font-medium text-primary ">
              <svg class="flex-shrink-0 w-5 h-5 mr-2 text-zinc-600 dark:text-zinc-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                  clip-rule="evenodd"></path>
              </svg>
              {{ __('Apakah VPN Remote dapat digunakan pada beberapa device?') }}
            </h3>
            <p class="text-zinc-600 dark:text-zinc-400">
              {{ __('Tidak, hanya dapat digunakan pada satu device. Namun, kamu dapat menggunakan satu akun untuk beberapa port. Harga dihitung berdasarkan jumlah port yang digunakan.') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('landing.partials.contact')
  <x-slot:script>
    <script>
      const sections = ['hero', 'about', 'services', 'pricing', 'contact'];
      sections.forEach(section => {
        const element = document.getElementById(section);
        const link = document.querySelector(`a[href="#${section}"]`);
        if (element && link) {
          document.addEventListener('scroll', function() {
            if (isInViewport(element)) {
              link.classList.remove('text-zinc-600', 'dark:text-zinc-50');
              link.classList.add('text-primary', 'text-primary', 'dark:text-primary', 'md:underline',
                'md:underline-offset-8');
            } else {
              link.classList.remove('text-primary', 'dark:text-primary', 'md:underline', 'md:underline-offset-8');
              link.classList.add('text-zinc-600', 'dark:text-zinc-50');
            }
          });
        }
      });

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
    </script>
  </x-slot:script>
</x-layouts.landing>
