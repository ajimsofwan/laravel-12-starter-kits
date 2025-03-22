<x-layouts.landing>
  <x-slot:title>{{ __('Layanan Tunnel Untuk Router & Device') }}</x-slot>
  <x-slot:description>
    {{ config('app.name', 'Laravel') }} {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting Mikhmon Online.') }}
  </x-slot>
  <x-slot:keywords>vpn remote mikrotik, vpn game, hosting mikhmon online, free ddns service.</x-slot:keywords>
  <x-slot:header>
    <section id="hero" x-data="{ show: false }" x-init="show = true">
      <div
        class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 text-center md:mt-0 md:text-left" data-aos="fade-down">
          <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary md:text-5xl lg:text-6xl">
            {{ __('Layanan Tunnel Untuk Router & Device') }}</h1>
          <p class="mb-6 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
            {{ __('Penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting Mikhmon Online.') }}
          </p>
          <div class="flex items-center justify-center gap-x-3 md:justify-start">
            <a href="#pricing"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white transition-transform duration-500 transform rounded-full bg-primary hover:-translate-y-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Lihat Harga') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
            <a href="/docs/"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center transition-transform duration-500 transform border-2 rounded-full text-primary border-primary dark:border-white dark:text-white hover:-translate-y-2 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Dokumentasi') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </div>
        <div data-aos="fade-left">
          <x-image-hero />
        </div>
      </div>
    </section>
  </x-slot:header>
  <section id="about" class="bg-blue-50 dark:bg-zinc-800">
    <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
      <div class="mt-4 md:mt-0" data-aos="fade-up">
        <h2 class="mb-4 text-2xl font-semibold tracking-tight text-primary md:text-4xl">
          {{ __('Kemudahan Akses Device Dan Router Dimanapun Dengan') }}
          {{ config('app.name', 'Laravel') }}</h2>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ config('app.name', 'Laravel') }}
          {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting
                                                                                              Mikhmon Online.') }}
        </p>
        <p class="mb-6 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Dengan') }} {{ config('app.name', 'Laravel') }},
          {{ __('Anda dapat mengakses device dan router Anda dimanapun dengan mudah menggunakan layanan tunneling
                                                                                              yang kami sediakan.') }}
        </p>
      </div>
      <div data-aos="fade-right" class="max-w-md md:order-first">
        <x-image-network />
      </div>
    </div>
  </section>
  <section id="services" class="bg-white dark:bg-zinc-900">
    <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
      <div data-aos="fade-right">
        <h2 class="mb-4 text-2xl font-semibold tracking-tight text-primary md:text-4xl">{{ __('Layanan') }}
          {{ config('app.name', 'Laravel') }}</h2>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Kami menyediakan berbagai layanan tunneling berkualitas tinggi untuk kebutuhan jaringan Anda.
                                                                                              Dengan teknologi terkini dan dukungan 24/7, kami berkomitmen memberikan pengalaman terbaik dalam mengakses
                                                                                              perangkat dan router dari mana saja.') }}
        </p>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Dengan infrastruktur server yang handal dan jaringan yang stabil, kami menjamin kualitas koneksi
                                                                                              terbaik untuk setiap layanan. Nikmati kemudahan akses dan performa optimal untuk kebutuhan networking
                                                                                              Anda.') }}
        </p>
      </div>
      <div class="flex flex-col mt-4 gap-y-2 md:mt-0">
        <div data-aos="fade-up">
          <div
            class="flex items-start px-2 py-4 space-x-2 transition-transform duration-500 transform rounded-lg bg-blue-50 dark:bg-blue-950 hover:translate-x-2">
            <div class="flex justify-center w-20 h-20">
              <x-icon-game class="text-primary size-11 dark:text-primary-light" />
            </div>
            <div>
              <h3 class="text-lg font-semibold text-primary dark:text-primary-light">{{ __('VPN Game') }}</h3>
              <p class="text-sm text-zinc-600 dark:text-zinc-400">
                {{ __('Layanan VPN L2TP/IPSec routing ke server game untuk pengalaman bermain game yang lebih
                                                                                                                                                    baik.') }}
              </p>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <div
            class="flex items-start px-2 py-4 space-x-2 transition-transform duration-500 transform rounded-lg bg-blue-50 dark:bg-blue-950 hover:translate-x-2">
            <div class="flex justify-center w-20 h-20">
              <flux:icon.shield-check class="text-yellow-600 size-12 dark:text-yellow-500" />
            </div>
            <div>
              <h3 class="text-lg font-semibold text-yellow-600 dark:text-yellow-500">{{ __('VPN Remote') }}</h3>
              <p class="text-sm text-zinc-600 dark:text-zinc-400">
                {{ __('Layanan VPN (OpenVpn/L2TP) untuk mengakses device dan router Anda dimanapun kapanpun.') }}
              </p>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="400">
          <div
            class="flex items-start px-2 py-4 space-x-2 transition-transform duration-500 transform rounded-lg bg-blue-50 dark:bg-blue-950 hover:translate-x-2">
            <div class="flex justify-center w-20 h-20">
              <flux:icon.server class="size-12 text-rose-600 dark:text-rose-500" />
            </div>
            <div>
              <h3 class="text-lg font-semibold text-rose-600 dark:text-rose-500">{{ __('Mikhmon Online') }}</h3>
              <p class="text-sm text-zinc-600 dark:text-zinc-400">
                {{ __('Layanan Hosting Mikhmon Online untuk monitoring dan cetak voucher dimanapun kapanpun.') }}
              </p>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="600">
          <div
            class="flex items-start px-2 py-4 space-x-2 transition-transform duration-500 transform rounded-lg bg-blue-50 dark:bg-blue-950 hover:translate-x-2">
            <div class="flex justify-center w-20 h-20">
              <flux:icon.globe-asia-australia class="text-teal-600 size-12 dark:text-teal-500" />
            </div>
            <div>
              <h3 class="text-lg font-semibold text-teal-600 dark:text-teal-500">{{ __('DDNS') }}</h3>
              <p class="text-sm text-zinc-600 dark:text-zinc-400">
                {{ __('Layanan DDNS untuk pointing subdomain ke ISP yang masih mendapatkan IP dinamis.') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="pricing" class="bg-blue-50 dark:bg-zinc-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
      <div class="mb-8 text-center lg:mb-16" data-aos="fade-down">
        <h2 class="mb-4 text-4xl font-semibold tracking-tight text-primary">{{ __('Harga') }}</h2>
        <p class="text-zinc-600 sm:text-xl dark:text-zinc-400">
          {{ __('Berikut ini harga untuk setiap layanan yang disediakan oleh') }} {{ config('app.name', 'Laravel') }}.
        </p>
      </div>
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-4 md:space-y-0" data-aos="fade-up">
        <x-card
          class="flex flex-col justify-between transition-transform duration-500 transform gap-y-4 hover:-translate-y-2">
          <div>
            <h3 class="mb-2 text-xl font-semibold text-center text-zinc-700 dark:text-zinc-200">VPN Game</h3>
            <div class="flex items-center justify-center mb-4 text-primary dark:text-primary-light">
              Rp <span><span class="text-6xl font-semibold">20rb</span>/{{ __('bln') }}</span>
            </div>
            <div class="text-left">
              <ul class="space-y-2">
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    10 Mbps Speed
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    100 GB Bandwith
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    SG Datacenter
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex justify-center mt-4">
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full bg-primary hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Beli Sekarang') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </x-card>
        <x-card
          class="flex flex-col justify-between transition-transform duration-500 transform gap-y-4 hover:-translate-y-2">
          <div>
            <h3 class="mb-2 text-xl font-semibold text-center text-zinc-700 dark:text-zinc-200">VPN Remote</h3>
            <div class="flex items-center justify-center mb-4 text-primary dark:text-primary-light">
              Rp <span><span class="text-6xl font-semibold">2rb</span>/{{ __('bln') }}</span>
            </div>
            <div class="text-left">
              <ul class="space-y-2">
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    OpenVPN/L2TP
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    Price for 1 port
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    SG, ID, FR Datacenter
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex justify-center mt-4">
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full bg-primary hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Beli Sekarang') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </x-card>
        <x-card
          class="flex flex-col justify-between transition-transform duration-500 transform gap-y-4 hover:-translate-y-2">
          <div>
            <h3 class="mb-2 text-xl font-semibold text-center text-zinc-700 dark:text-zinc-200">Mikhmon Online</h3>
            <div class="flex items-center justify-center mb-4 text-primary dark:text-primary-light">
              Rp <span><span class="text-6xl font-semibold">10rb</span>/{{ __('bln') }}</span>
            </div>
            <div class="text-left">
              <ul class="space-y-2">
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    Unlimited Server
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    Free VPN Remote API
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    SG Datacenter
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex justify-center mt-4">
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full bg-primary hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Beli Sekarang') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </x-card>
        <x-card
          class="flex flex-col justify-between transition-transform duration-500 transform gap-y-4 hover:-translate-y-2">
          <div>
            <h3 class="mb-2 text-xl font-semibold text-center text-zinc-700 dark:text-zinc-200">DDNS</h3>
            <div class="flex items-center justify-center mb-4 text-primary dark:text-primary-light">
              <span class="text-6xl font-semibold">Free</span>
            </div>
            <div class="text-left">
              <ul class="space-y-2">
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    Custom IP Address
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <x-icon-check class="flex-shrink-0 w-6 h-6 text-teal-500 dark:text-teal-400" />
                    Valid for 30 Days
                  </span>
                </li>
                <li>
                  <span class="flex items-center gap-2">
                    <span
                      class="flex items-center justify-center w-6 h-6 text-white bg-yellow-500 rounded-full dark:text-zinc-800">
                      <flux:icon.x-mark class="w-4 h-4" />
                    </span>
                    Manual Renewal
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex justify-center mt-4">
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full bg-primary hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Dapatkan Gratis') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </x-card>
      </div>
    </div>
  </section>
  <section id="faqs" class="bg-white dark:bg-zinc-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
      <h2 data-aos="fade-left" class="mb-8 text-4xl font-semibold tracking-tight text-primary">
        {{ __('Pertanyaan yang Sering Diajukan') }}
      </h2>
      <div data-aos="fade-up"
        class="grid pt-8 text-left border-t border-zinc-200 md:gap-y-8 md:gap-x-16 dark:border-zinc-600 md:grid-cols-2">
        <div>
          <h3 class="flex items-center mb-4 text-lg font-medium text-primary">
            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-zinc-600 dark:text-zinc-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                clip-rule="evenodd"></path>
            </svg>
            {{ __('Apa itu') }} {{ config('app.name', 'Laravel') }}?
          </h3>
          <p class="mb-3 text-zinc-600 dark:text-zinc-400">{{ config('app.name', 'Laravel') }}
            {{ __('adalah penyedia layanan tunneling untuk mikrotik seperti VPN Remote, VPN Game, DDNS dan Hosting
                                                                                                                Mikhmon Online.') }}
            {{ __('Dengan') }} {{ config('app.name', 'Laravel') }},
            {{ __('Anda dapat mengakses device dan router Anda dimanapun dengan mudah menggunakan layanan tunneling
                                                                                                                yang kami sediakan.') }}
          </p>
        </div>
        <div>
          <h3 class="flex items-center mb-4 text-lg font-medium text-primary">
            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-zinc-600 dark:text-zinc-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                clip-rule="evenodd"></path>
            </svg>
            {{ __('Apa itu') }} VPN Remote?
          </h3>
          <p class="text-zinc-600 dark:text-zinc-400">
            {{ __('Layanan VPN Remote Menjadi solusi untuk kamu yang sering bekerja dari jarak jauh atau membutuhkan
                                                                                                                akses jaringan dari suatu tempat dari lokasi yang berbeda.') }}
            {{ __('Layanan ini bisa kamu gunakan untuk mengakses service mikrotik serperti Winbox, API, Webfig atau
                                                                                                                bisa juga device lain yang mendukung OpenVPN.') }}
          </p>
        </div>
        <div>
          <h3 class="flex items-center mb-4 text-lg font-medium text-primary">
            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-zinc-600 dark:text-zinc-400" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                clip-rule="evenodd"></path>
            </svg>
            {{ __('Apa itu') }} Mikhmon Online?
          </h3>
          <p class="text-zinc-600 dark:text-zinc-400">
            {{ __('MikroTik Hotspot Monitor adalah aplikasi berbasis web (MikroTik API PHP class) untuk membantu
                                                                                                                manajemen Hotspot MikroTik. Khususnya MikroTik yang tidak mendukung User Manager dan dapat diakses
                                                                                                                secara Online.') }}
          </p>
        </div>
      </div>
    </div>
  </section>
  @include('landing.partials.contact')
  @push('script')
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
                'md:underline-offset-7');
            } else {
              link.classList.remove('text-primary', 'dark:text-primary', 'md:underline', 'md:underline-offset-7');
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
  @endpush
</x-layouts.landing>
