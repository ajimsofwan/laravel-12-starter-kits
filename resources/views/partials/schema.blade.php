<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [{
        "@type": "WebSite",
        "@id": "{{ config('app.url') }}/#website",
        "url": "{{ config('app.url') }}/",
        "name": "{{ config('app.name') }}",
        "description": "@lang('Layanan Tunnel Untuk Router & Device')",
        "inLanguage": "{{ app()->getLocale() === 'en' ? 'en-US' : (app()->getLocale() === 'id' ? 'id-ID' : app()->getLocale()) }}"
      },
      {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}/#webpage",
        "url": "{{ url()->current() }}{{ (request()->path() == '/') ? '/' : '' }}",
        "name": "{{ (request()->path() == '/') ? config('app.name') . ': ' . $title : $title . ' - ' . config('app.name') }}",
        "isPartOf": {
          "@id": "{{ config('app.url') }}/#website"
        },
        "description": "{{ $description ?? '' }}",
        "keywords": "{{ $keywords ?? '' }}",
        "inLanguage": "{{ app()->getLocale() === 'en' ? 'en-US' : (app()->getLocale() === 'id' ? 'id-ID' : app()->getLocale()) }}"
        "potentialAction": [{
          "@type": "ReadAction",
          "target": ["{{ url()->current() }}{{ (request()->path() == '/') ? '/' : '' }}"]
        }]
      }
    ]
  }
</script>
