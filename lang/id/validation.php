<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut berisi pesan kesalahan default yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi seperti
    | aturan ukuran. Anda bebas mengubah pesan-pesan ini sesuai kebutuhan.
    |
    */

  'accepted' => 'Kolom :attribute harus disetujui.',
  'accepted_if' => 'Kolom :attribute harus disetujui ketika :other adalah :value.',
  'active_url' => 'Kolom :attribute harus berupa URL yang valid.',
  'after' => 'Kolom :attribute harus berupa tanggal setelah :date.',
  'after_or_equal' => 'Kolom :attribute harus berupa tanggal setelah atau sama dengan :date.',
  'alpha' => 'Kolom :attribute hanya boleh berisi huruf.',
  'alpha_dash' => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
  'alpha_num' => 'Kolom :attribute hanya boleh berisi huruf dan angka.',
  'array' => 'Kolom :attribute harus berupa array.',
  'ascii' => 'Kolom :attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.',
  'before' => 'Kolom :attribute harus berupa tanggal sebelum :date.',
  'before_or_equal' => 'Kolom :attribute harus berupa tanggal sebelum atau sama dengan :date.',
  'between' => [
    'array' => 'Kolom :attribute harus memiliki :min sampai :max item.',
    'file' => 'Kolom :attribute harus berukuran antara :min sampai :max kilobyte.',
    'numeric' => 'Kolom :attribute harus bernilai antara :min sampai :max.',
    'string' => 'Kolom :attribute harus berisi antara :min sampai :max karakter.',
  ],
  'boolean' => 'Kolom :attribute harus bernilai true atau false.',
  'can' => 'Kolom :attribute berisi nilai yang tidak diizinkan.',
  'confirmed' => 'Konfirmasi :attribute tidak cocok.',
  'contains' => 'Kolom :attribute tidak memiliki nilai yang diperlukan.',
  'current_password' => 'Kata sandi salah.',
  'date' => 'Kolom :attribute harus berupa tanggal yang valid.',
  'date_equals' => 'Kolom :attribute harus berupa tanggal yang sama dengan :date.',
  'date_format' => 'Kolom :attribute harus sesuai dengan format :format.',
  'decimal' => 'Kolom :attribute harus memiliki :decimal tempat desimal.',
  'declined' => 'Kolom :attribute harus ditolak.',
  'declined_if' => 'Kolom :attribute harus ditolak ketika :other adalah :value.',
  'different' => 'Kolom :attribute dan :other harus berbeda.',
  'digits' => 'Kolom :attribute harus terdiri dari :digits digit.',
  'digits_between' => 'Kolom :attribute harus terdiri dari :min sampai :max digit.',
  'dimensions' => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
  'distinct' => 'Kolom :attribute memiliki nilai yang duplikat.',
  'doesnt_end_with' => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
  'doesnt_start_with' => 'Kolom :attribute tidak boleh dimulai dengan salah satu dari berikut ini: :values.',
  'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
  'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
  'enum' => 'Kolom :attribute yang dipilih tidak valid.',
  'exists' => 'Kolom :attribute yang dipilih tidak valid.',
  'extensions' => 'Kolom :attribute harus memiliki salah satu ekstensi berikut: :values.',
  'file' => 'Kolom :attribute harus berupa file.',
  'filled' => 'Kolom :attribute harus memiliki nilai.',
  'gt' => [
    'array' => 'Kolom :attribute harus memiliki lebih dari :value item.',
    'file' => 'Kolom :attribute harus lebih besar dari :value kilobyte.',
    'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
    'string' => 'Kolom :attribute harus lebih besar dari :value karakter.',
  ],
  'gte' => [
    'array' => 'Kolom :attribute harus memiliki :value item atau lebih.',
    'file' => 'Kolom :attribute harus lebih besar atau sama dengan :value kilobyte.',
    'numeric' => 'Kolom :attribute harus lebih besar atau sama dengan :value.',
    'string' => 'Kolom :attribute harus lebih besar atau sama dengan :value karakter.',
  ],
  'hex_color' => 'Kolom :attribute harus berupa warna heksadesimal yang valid.',
  'image' => 'Kolom :attribute harus berupa gambar.',
  'in' => 'Kolom :attribute yang dipilih tidak valid.',
  'in_array' => 'Kolom :attribute harus ada di :other.',
  'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
  'ip' => 'Kolom :attribute harus berupa alamat IP yang valid.',
  'ipv4' => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
  'ipv6' => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
  'json' => 'Kolom :attribute harus berupa string JSON yang valid.',
  'list' => 'Kolom :attribute harus berupa daftar.',
  'lowercase' => 'Kolom :attribute harus berupa huruf kecil.',
  'lt' => [
    'array' => 'Kolom :attribute harus memiliki kurang dari :value item.',
    'file' => 'Kolom :attribute harus kurang dari :value kilobyte.',
    'numeric' => 'Kolom :attribute harus kurang dari :value.',
    'string' => 'Kolom :attribute harus kurang dari :value karakter.',
  ],
  'lte' => [
    'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
    'file' => 'Kolom :attribute harus kurang dari atau sama dengan :value kilobyte.',
    'numeric' => 'Kolom :attribute harus kurang dari atau sama dengan :value.',
    'string' => 'Kolom :attribute harus kurang dari atau sama dengan :value karakter.',
  ],
  'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',
  'max' => [
    'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
    'file' => 'Kolom :attribute tidak boleh lebih besar dari :max kilobyte.',
    'numeric' => 'Kolom :attribute tidak boleh lebih besar dari :max.',
    'string' => 'Kolom :attribute tidak boleh lebih besar dari :max karakter.',
  ],
  'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
  'mimes' => 'Kolom :attribute harus berupa file bertipe: :values.',
  'mimetypes' => 'Kolom :attribute harus berupa file bertipe: :values.',
  'min' => [
    'array' => 'Kolom :attribute harus memiliki setidaknya :min item.',
    'file' => 'Kolom :attribute harus berukuran minimal :min kilobyte.',
    'numeric' => 'Kolom :attribute minimal :min.',
    'string' => 'Kolom :attribute harus berisi minimal :min karakter.',
  ],
  'min_digits' => 'Kolom :attribute harus memiliki minimal :min digit.',
  'missing' => 'Kolom :attribute harus tidak ada.',
  'missing_if' => 'Kolom :attribute harus tidak ada ketika :other adalah :value.',
  'missing_unless' => 'Kolom :attribute harus tidak ada kecuali :other adalah :value.',
  'missing_with' => 'Kolom :attribute harus tidak ada ketika :values ada.',
  'missing_with_all' => 'Kolom :attribute harus tidak ada ketika :values ada.',
  'multiple_of' => 'Kolom :attribute harus merupakan kelipatan dari :value.',
  'not_in' => 'Kolom :attribute yang dipilih tidak valid.',
  'not_regex' => 'Format :attribute tidak valid.',
  'numeric' => 'Kolom :attribute harus berupa angka.',
  'password' => [
    'letters' => 'Kolom :attribute harus mengandung setidaknya satu huruf.',
    'mixed' => 'Kolom :attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
    'numbers' => 'Kolom :attribute harus mengandung setidaknya satu angka.',
    'symbols' => 'Kolom :attribute harus mengandung setidaknya satu simbol.',
    'uncompromised' => 'Kolom :attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
  ],
  'present' => 'Kolom :attribute harus ada.',
  'present_if' => 'Kolom :attribute harus ada ketika :other adalah :value.',
  'present_unless' => 'Kolom :attribute harus ada kecuali :other adalah :value.',
  'present_with' => 'Kolom :attribute harus ada ketika :values ada.',
  'present_with_all' => 'Kolom :attribute harus ada ketika :values ada.',
  'prohibited' => 'Kolom :attribute dilarang.',
  'prohibited_if' => 'Kolom :attribute dilarang ketika :other adalah :value.',
  'prohibited_if_accepted' => 'Kolom :attribute dilarang ketika :other disetujui.',
  'prohibited_if_declined' => 'Kolom :attribute dilarang ketika :other ditolak.',
  'prohibited_unless' => 'Kolom :attribute dilarang kecuali :other ada dalam :values.',
  'prohibits' => 'Kolom :attribute melarang :other untuk hadir.',
  'regex' => 'Format :attribute tidak valid.',
  'required' => 'Kolom :attribute wajib diisi.',
  'required_array_keys' => 'Kolom :attribute harus berisi entri untuk: :values.',
  'required_if' => 'Kolom :attribute wajib diisi ketika :other adalah :value.',
  'required_if_accepted' => 'Kolom :attribute wajib diisi ketika :other disetujui.',
  'required_if_declined' => 'Kolom :attribute wajib diisi ketika :other ditolak.',
  'required_unless' => 'Kolom :attribute wajib diisi kecuali :other ada dalam :values.',
  'required_with' => 'Kolom :attribute wajib diisi ketika :values ada.',
  'required_with_all' => 'Kolom :attribute wajib diisi ketika :values ada.',
  'required_without' => 'Kolom :attribute wajib diisi ketika :values tidak ada.',
  'required_without_all' => 'Kolom :attribute wajib diisi ketika tidak ada :values yang ada.',
  'same' => 'Kolom :attribute harus sama dengan :other.',
  'size' => [
    'array' => 'Kolom :attribute harus berisi :size item.',
    'file' => 'Kolom :attribute harus berukuran :size kilobyte.',
    'numeric' => 'Kolom :attribute harus berukuran :size.',
    'string' => 'Kolom :attribute harus berisi :size karakter.',
  ],
  'starts_with' => 'Kolom :attribute harus dimulai dengan salah satu dari berikut ini: :values.',
  'string' => 'Kolom :attribute harus berupa string.',
  'timezone' => 'Kolom :attribute harus berupa zona waktu yang valid.',
  'unique' => 'Kolom :attribute sudah terdaftar.',
  'uploaded' => 'Kolom :attribute gagal diunggah.',
  'uppercase' => 'Kolom :attribute harus berupa huruf besar.',
  'url' => 'Kolom :attribute harus berupa URL yang valid.',
  'ulid' => 'Kolom :attribute harus berupa ULID yang valid.',
  'uuid' => 'Kolom :attribute harus berupa UUID yang valid.',
  'phone' => 'Nomor Telepon tidak valid.',

  /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan
    | menggunakan konvensi "attribute.rule" untuk memberi nama baris. Hal ini
    | memudahkan dalam menentukan baris bahasa kustom yang spesifik untuk
    | aturan atribut tertentu.
    |
    */

  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],

  /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar placeholder atribut kami
    | dengan sesuatu yang lebih mudah dibaca seperti "Alamat Email" daripada
    | "email". Ini hanya membantu kita membuat pesan lebih ekspresif.
    |
    */

  'attributes' => [],

];
