<x-layouts.landing>
  <x-slot:title>Kebijakan Privasi</x-slot>
  <x-slot:description>Kebijakan Privasi {{ config('app.name') }}.</x-slot>
  <x-slot:keywords>kebijakan privasi, {{ strtolower(config('app.name')) }}.</x-slot>
  <x-slot:header>
    <section class="mb-24 md:mb-20">
      <div class="max-w-screen-xl px-4 py-16 mx-auto text-center lg:px-12">
        <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary lg:text-5xl">
          Kebijakan Privasi {{ config('app.name') }}</h1>
        <p class="mb-8 text-lg font-normal text-zinc-500 lg:text-xl sm:px-16 xl:px-48 dark:text-zinc-400">
          Terakhir diperbarui pada 26 November 2024.</p>
      </div>
    </section>
  </x-slot:header>
  <section class="pb-20 text-zinc-600 dark:text-zinc-400 bg-zinc-50 dark:bg-[#171f2e]">
    <div class="px-4 py-4">
      <div
        class="max-w-screen-lg px-8 py-10 mx-auto -mt-40 space-y-4 border border-zinc-300 md:py-16 md:px-12 rounded-xl dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800">
        <p class="mb-4">Sebagai penyedia jasa layanan, kami {{ config('app.name') }} sangat
          menjunjung tinggi
          privasi customer. Hal ini karena informasi pribadi merupakan hal yang sangat krusial dan tidak boleh
          diketahui
          siapapun. Berikut akan kami jelaskan mengenai informasi apa saja yang kami terima dan kami kumpulkan
          pada saat
          Anda mengunjungi situs {{ config('app.name') }}. Serta, tentang bagaimana kami menyimpan dan menjaga
          informasi
          tersebut.
          Kami tegaskan bahwa kami tidak akan pernah memberikan informasi tersebut kepada siapapun termasuk pihak
          ketiga.</p>
        <h2 class="text-xl font-semibold md:text-2xl">Informasi yang Dikumpulkan</h2>
        <ul class="mx-5 space-y-4 list-disc">
          <li><span class="font-semibold">File Log</span>
            <p>Seperti situs lain pada umumnya, kami mengumpulkan dan menggunakan data yang terdapat pada file
              log.
              Informasi yang terdapat pada file log termasuk alamat IP (Internet Protocol) Anda, ISP (Internet
              Service
              Provider), browser yang Anda gunakan, waktu pada saat Anda berkunjung serta halaman mana saja yang
              Anda
              buka selama berkunjung di {{ config('app.name') }}.</p>
          </li>
          <li><span class="font-semibold">Cookies</span>
            <p>Situs kami menggunakan cookies untuk menyimpan berbagai informasi seperti preferensi pribadi pada
              saat
              mengunjungi situs {{ config('app.name') }} serta informasi login. {{ config('app.name') }} juga
              menggunakan layanan tracking dari
              pihak ketiga untuk mendukung situs kami. Beberapa layanan tersebut mungkin menggunakan cookies
              ketika
              melakukan tracking di situs kami. {{ config('app.name') }} bekerja sama dengan layanan tracker
              seperti
              Google AdWords,
              Google Analytics, AdRoll serta CrazyEgg. Dimana informasi yang dikirim dapat berupa alamat IP, ISP,
              browser, sistem operasi yang Anda pakai, dan sebagainya.</p>
          </li>
          <li><span class="font-semibold">Penggunaan Informasi</span>
            <p>Data pengguna meliputi: Nama; Informasi kontak, termasuk alamat email; Data demografi seperti kode
              pos,
              preferensi, dan minat; Informasi lain yang berhubungan dengan survei pelanggan dan/penawaran.</p>
          </li>
        </ul>
        <h2 class="text-xl font-semibold md:text-2xl">Informasi yang Dikumpulkan</h2>
        <p>Kami menggunakan informasi yang dikumpulkan di situs kami untuk penargetan iklan berdasarkan relevansi
          informasi; Memberikan pengalaman yang lebih baik kepada Anda dalam bentuk penawaran produk, survey
          layanan
          yang relevan; Mengirimkan promosi kepada anda dalam bentuk email atau sms maupun telepon; Meningkatkan
          pelayanan kami dalam bentuk perbaikan dalam situs.</p>
        <h2 class="text-xl font-semibold md:text-2xl">Perubahan</h2>
        <p>Dengan mengakses situs {{ config('app.name') }}, maka Anda setuju bahwa kebijakan privasi ini dapat
          diubah
          dalam hal apa saja dan kapan saja oleh {{ config('app.name') }}. Penggunaan Layanan yang tetap Anda
          lakukan
          secara kontinyu akan dianggap setuju terhadap perubahan tersebut. Jika Anda tidak ingin melanjutkan
          menggunakan Layanan kami karena perubahan
          tersebut, Anda dapat memberitahukan keinginan Anda untuk menghentikan penggunaan jasa Layanan ke
          {{ config('app.name') }}.</p>
      </div>
    </div>
  </section>
</x-layouts.landing>
