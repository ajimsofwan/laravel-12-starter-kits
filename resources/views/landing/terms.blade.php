<x-layouts.landing>
  <x-slot:title>Ketentuan Layanan</x-slot>
  <x-slot:description>Ketentuan Layanan {{ config('app.name') }}.</x-slot>
  <x-slot:keywords>ketentuan layanan, {{ strtolower(config('app.name')) }}.</x-slot>
  <x-slot:header>
    <section class="mb-24 md:mb-20">
      <div class="max-w-screen-xl px-4 py-16 mx-auto text-center lg:px-12">
        <h1 class="mt-10 mb-4 text-4xl font-semibold leading-none tracking-tight text-primary lg:text-5xl">
          Ketentuan Layanan {{ config('app.name') }}</h1>
        <p class="mb-8 text-lg font-normal text-zinc-500 lg:text-xl sm:px-16 xl:px-48 dark:text-zinc-400">
          Terakhir diperbarui pada 26 November 2024.</p>
      </div>
    </section>
  </x-slot:header>
  <section class="pb-20  text-zinc-600 dark:text-zinc-400 bg-zinc-50 dark:bg-[#171f2e]">
    <div class="px-4 py-4">
      <div
        class="max-w-screen-lg px-8 py-10 mx-auto -mt-40 space-y-4 border border-zinc-300 md:py-16 md:px-12 rounded-xl dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800">
        <p class="mb-4">Terms of Service (dalam dokumen ini disebutkan sebagai <strong>"Ketentuan
            Layanan"</strong>)
          ini merupakan
          bagian penting dalam hubungan Anda sebagai Pelanggan dengan {{ config('app.name') }} sebagai penyedia
          layanan. Dengan mendaftarkan akun {{ config('app.name') }}, Anda telah membaca dan menyetujui seluruh
          Ketentuan Layanan yang
          tertera di dokumen ini.</p>

        <h2 class="text-xl font-semibold md:text-2xl">Persyaratan Umum dan Ketentuan</h2>
        <p>Layanan disediakan untuk perorangan, organisasi, atau perusahaan (dalam dokumen ini disebutkan sebagai
          <strong>“Pelanggan”</strong> atau <strong>“Anda”</strong>). Segala pemanfaatan layanan harus tunduk pada
          seluruh pembatasan yang tercantum di
          bawah ini. Dengan menggunakan layanan {{ config('app.name') }}, Anda menyetujui untuk terikat dengan
          seluruh
          Ketentuan Layanan. Jika Anda tidak setuju untuk terikat dengan Ketentuan Layanan, Anda harus membatalkan
          akun
          {{ config('app.name') }} Anda secepatnya dan tidak diperkenankan melanjutkan menggunakan atau mencoba
          menggunakan
          layanan.
        </p>

        <h3 class="text-xl font-semibold md:text-xl">Cakupan</h3>
        <p>Jika Anda adalah Pelanggan perorangan, Ketentuan Layanan ini mengikat semua orang yang mendapatkan
          akses
          melalui akun {{ config('app.name') }} Anda. Jika Anda adalah Pelanggan organisasi atau perusahaan,
          Ketentuan
          Layanan ini
          berlaku untuk seluruh karyawan, agen-agen, dan/atau Pelanggan yang mendapatkan akses melalui akun
          {{ config('app.name') }}
          Anda. Dengan kata lain, pelanggaran terhadap Kebijakan Layanan oleh seseorang yang menggunakan akun Anda
          akan
          dianggap sebagai pelanggaran oleh Anda.</p>

        <h3 class="text-xl font-semibold md:text-xl">Jangka Waktu</h3>
        <p>Layanan ini tersedia untuk Anda selama Anda ingin menggunakannya, bagaimanapun juga kami berhak untuk
          menghentikan layanan jika Anda menggunakannya dengan cara yang melanggar persyaratan penggunaan.</p>

        <h3 class="text-xl font-semibold md:text-xl">Penggunaan Informasi</h3>
        <p>Data pengguna meliputi: Nama; Informasi kontak, termasuk alamat email; Data demografi seperti kode pos,
          preferensi, dan minat; Informasi lain yang berhubungan dengan survei pelanggan dan/penawaran.</p>

        <h3 class="text-xl font-semibold md:text-xl">Layanan VPN Game</h3>
        <p>Layanan VPN Game bertujuan untuk meningkatkan stabilitas koneksi game. Namun kami tidak menjamin
          penggunaan
          layanan ini dapat sepenuhnya menstabilkan koneksi game karena banyak faktor yang mempengaruhi kestabilan
          koneksi game.</p>
        <p>Layanan VPN Game memiliki batasan speed dan bandwidth berbeda-beda disetiap lokasi server. Kami tidak
          menyediakan cara atau petunjuk untuk konfigurai routing mikrotik, dikarenakan kondisi konfigurasi di
          setiap
          router yang berbeda-beda. </p>
        <p>Pelanggan tidak diperkenankan:</p>
        <ol class="mx-5 space-y-4 list-decimal">
          <li>Menggunakan layanan untuk kegiatan phishing, scam, fraud atau lainya yang melanggar hukum Republik
            Indonesia atau hukum negara lainnya.</li>
          <li>Menggunakan layanan selain untuk kebutuhan routing traffic game.</li>
        </ol>

        <h3 class="text-xl font-semibold md:text-xl">Layanan VPN Remote</h3>
        <p>Layanan VPN Remote bertujuan untuk memberikan akses remote ke device dan router berupa host:port dan
          memiliki
          batasan speed 2 Mbps.</p>
        <p>Pelanggan tidak diperkenankan:</p>
        <ol class="mx-5 space-y-4 list-decimal">
          <li>Menggunakan layanan selain untuk kebutuhan remote access.
          </li>
          <li>Penggunaan bandwith hingga 2 Mbps secara terus menerus.
          </li>
        </ol>

        <h3 class="text-xl font-semibold md:text-xl">Layanan Mikhmon Online</h3>
        <p>Layanan Mikhmon Online merupakan layanan hosting aplikasi Mikhmon. Aplikasi diambil dari repository
          <span class="italic font-semibold">https://github.com/laksa19/mikhmonv3</span> yang dilakukan perubahan
          dan
          penyesuaian.
        </p>
        <p>Pelanggan tidak diperkenankan:</p>
        <ol class="mx-5 space-y-4 list-decimal">
          <li>Menggunakan layanan selain untuk aplikasi Mikhmon.</li>
          <li>Meminta untuk melalukan perubahan kode aplikasi Mikhmon.</li>
          <li>Meminta akses ke control panel Hosting.</li>
        </ol>

        <h3 class="text-xl font-semibold md:text-xl">Layanan DDNS</h3>
        <p>DDNS adalah sebuah layanan yang memungkinkan pengguna untuk menghubungkan alamat IP dinamis mereka ke
          sebuah
          nama domain yang tetap..</p>
        </p>
        <p>Pelanggan tidak diperkenankan:</p>
        <ol class="mx-5 space-y-4 list-decimal">
          <li>Menggunakan layanan untuk kegiatan phishing, scam, fraud atau lainya yang melanggar hukum Republik
            Indonesia atau hukum negara lainnya.
          </li>
        </ol>

        <h3 class="text-xl font-semibold md:text-xl">Penangguhan dan Pemberhentian</h3>
        <p>Anda setuju untuk mematuhi Kebijakan Layanan ini. Segala bentuk pelanggaran, baik Kebijakan Layanan
          maupun
          aturan lain: peraturan dan kebijakan di atas, dapat menjadi alasan {{ config('app.name') }} untuk
          menangguhkan
          atau menghentikan akun Anda. Anda menyetujui {{ config('app.name') }} memiliki hak, dengan atau tanpa
          pemberitahuan, menangguhkan atau menghentikan akun Anda.</p>

        <h3 class="text-xl font-semibold md:text-xl">Biaya</h3>
        <p>{{ config('app.name') }} mererapkan biaya tambahan untuk pembayaran dengan QRIS sebesar
          <strong>0.7%</strong> dari nominal harga. Sesuai dengan kebijakan Merchant Discount Rate (MDR) QRIS
          yang diterapkan Bank Indonesia (BI) untuk membiayai perawatan dan pengembangan infrastruktur QRIS, serta
          operasional yang
          terkait. Semua biaya akan dibebankan ke pembeli.
        </p>


        <h3 class="text-xl font-semibold md:text-xl">Pembayaran</h3>
        <p>{{ config('app.name') }} menggunakan layanan pihak ketiga <strong>"Paydia"</strong> sebagai pengelola
          pembayaran. Hal-hal
          lain
          terkait Kebijakan Layanan pihak ketiga dapat merujuk pada Kebijakan Layanan pihak tersebut.
        </p>

        <h3 class="text-xl font-semibold md:text-xl">Perubahan</h3>
        <p>Kebijakan Layanan ini dapat diubah dalam hal apa saja dan kapan saja oleh {{ config('app.name') }}.
          Penggunaan layanan yang Anda lakukan secara berkelanjutan dianggap setuju terhadap perubahan tersebut.
          Jika
          Anda tidak ingin melanjutkan menggunakan layanan kami karena perubahan tersebut, Anda dapat
          memberitahukan
          keinginan Anda untuk menghentikan penggunaan layanan {{ config('app.name') }}.</p>

      </div>
    </div>
  </section>
</x-layouts.landing>
