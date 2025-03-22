<x-layouts.landing>
  <x-slot:title>{{ __('Hubungi Kami') }}</x-slot>
  <x-slot:description>{{ __('Hubungi kami dan kami akan menghubungi Anda sesegera mungkin.') }} {{ config('app.name', 'Laravel') }}.</x-slot>
  <x-slot:keywords>vpn game, vpn game mikrotik, mikrotik vpn game, l2tp vpn mikrotik, vpn l2tp murah.
  </x-slot:keywords>
  <x-slot:header>
    <section x-data="{ show: false }" x-init="show = true">
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
        <div data-aos="fade-down" class="mb-8 text-center lg:mb-16">
          <h1 class="mb-4 text-4xl font-semibold tracking-tight text-primary ">{{ __('Kontak Kami') }}</h1>
          <p class="text-zinc-600 sm:text-xl dark:text-zinc-400">
            {{ __('Hubungi kami dan kami akan menghubungi Anda sesegera mungkin.') }}</p>
        </div>
        <div data-aos="fade-up" class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
          <div class="text-center">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
              <flux:icon.map-pin class="text-primary dark:text-primary-light size-max" />
            </div>
            <h3 class="mb-2 text-lg font-semibold text-zinc-700 dark:text-zinc-200">{{ __('Alamat') }}</h3>
            <p class="text-zinc-600 dark:text-zinc-400">
              Jl. Rajapolah No.200, Rajapolah Tasikmalaya
              <br>Jawa Barat 46155
            </p>
          </div>
          <div class="text-center">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
              <x-icon-whatsapp class="text-green-600 dark:text-green-500" />
            </div>
            <h3 class="mb-2 text-lg font-semibold text-zinc-700 dark:text-zinc-200">WhatsApp</h3>
            <p class="text-zinc-600 dark:text-zinc-400">
              &#43;&#54;&#50;&#56;&#53;&#49;&#53;&#53;&#50;&#55;&#52;&#49;&#49;&#49;
            </p>
          </div>
          <div class="text-center">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-4 lg:h-12 lg:w-12">
              <flux:icon.envelope class="text-red-600 dark:text-red-500 size-max" />
            </div>
            <h3 class="mb-2 text-lg font-semibold text-zinc-700 dark:text-zinc-200">Email</h3>
            <p class="text-zinc-600 dark:text-zinc-400">
              &#116;&#117;&#110;&#110;&#101;&#108;&#46;&#104;&#101;&#108;&#112;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
            </p>
          </div>
        </div>
      </div>
    </section>
  </x-slot:header>
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
