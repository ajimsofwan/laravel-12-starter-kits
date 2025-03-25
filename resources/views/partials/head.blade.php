<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="{{ $description ?? '' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">
<meta name="author" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ config('app.name') }}: {{ $title ?? '' }}" />
<meta property="og:description" content="{{ $description ?? '' }}" />
<meta property="og:url" content="{{ config('app.url') }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:image" content="{{ asset('assets/img/banner.png') }}" />
<meta property="og:locale" content="id_ID" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
{{--
<link rel="icon" type="image/svg+xml" href="/favicon.svg"> --}}
<title>{{ isset($title) ? "$title - " : '' }}{{ config('app.name', 'Laravel') }}</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance