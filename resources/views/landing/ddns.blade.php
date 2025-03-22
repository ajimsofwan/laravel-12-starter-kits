<x-layouts.landing>
  <x-slot:title>{{ __('Layanan DDNS') }}</x-slot>
  <x-slot:description>{{ __('Layanan DDNS Gratis untuk pointing subdomain ke IP Public dinamis dari') }} {{ config('app.name', 'Laravel') }}.</x-slot>
  <x-slot:keywords>ddns, free ddns service, layanan ddns gratis.</x-slot:keywords>
  <x-slot:header>
    <section id="hero" x-data="{ show: false }" x-init="show = true">
      <div
        class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 text-center md:mt-0 md:text-left" data-aos="fade-down">
          <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary md:text-5xl lg:text-6xl">
            {{ __('Layanan DDNS') }}</h1>
          <p class="mb-6 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
            {{ __('Layanan DDNS Gratis untuk pointing subdomain ke IP Public dinamis dari') }}
            {{ config('app.name', 'Laravel') }}.</p>
          <div class="flex items-center justify-center gap-x-3 md:justify-start">
            <a href="/docs/category/ddns/" target="_blank" rel="nofollow, noopener"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center transition-transform duration-500 transform border-2 rounded-full text-primary border-primary dark:border-white dark:text-white hover:-translate-y-2 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              {{ __('Dokumentasi') }}
              <flux:icon.arrow-right class="w-5 h-5 ml-2 -mr-1" />
            </a>
          </div>
        </div>
        <div data-aos="fade-left">
          <x-image-network-2 />
        </div>
      </div>
    </section>
  </x-slot:header>
  <section id="article" class="bg-blue-50 dark:bg-zinc-800">
    <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
      <div class="mt-4 md:mt-0" data-aos="fade-up">
        <h2 class="mb-4 text-2xl font-semibold tracking-tight text-primary md:text-4xl ">
          {{ __('Nikmati Layanan DDNS Gratis') }}</h2>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('DDNS adalah singkatan dari Dynamic Domain Name System atau Sistem Nama Domain Dinamis. Ini adalah
                                  layanan yang memungkinkan pembaruan otomatis terhadap catatan DNS (Domain Name System) ketika alamat IP
                                  dari perangkat atau jaringan berubah secara dinamis.') }}
        </p>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Sistem ini sangat berguna untuk kasus di mana alamat IP yang diberikan oleh penyedia layanan
                                  internet (ISP) berubah secara teratur.') }}
        </p>
        <p class="mb-3 font-light text-zinc-600 md:text-lg dark:text-zinc-400">
          {{ __('Penggunaan umum dari DDNS adalah untuk memungkinkan akses jarak jauh ke perangkat atau layanan di
                                  dalam jaringan lokal, seperti kamera keamanan, server, atau perangkat lainnya, meskipun alamat IP
                                  eksternal dari jaringan tersebut berubah. Dengan catatan jaringan tidak berada dibawah NAT.') }}
        </p>
      </div>
      <div data-aos="fade-right" class="max-w-md md:order-first">
        <x-image-network-2 />
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
              {{ __('Apakah Layanan DDNS Gratis?') }}
            </h3>
            <p class="mb-3 text-zinc-600 dark:text-zinc-400">
              {{ __('Ya, Layanan DDNS ini gratis untuk digunakan oleh semua pengguna.') }}
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
              {{ __('Apa yang terjadi jika masa aktif DDNS selama 30 hari habis?') }}
            </h3>
            <p class="text-zinc-600 dark:text-zinc-400">
              {{ __('Layanan DDNS akan terhapus secara otomatis. Untuk menghindari hal ini, silahkan memperpanjang
                                              masa aktif dengan cara merefresh IP secara berkala minimal 1 kali dalam 30 hari.') }}
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
