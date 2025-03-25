@props(['text' => ''])

<span type="button" x-data="{ label: '{{ $text }}' }" {{ $attributes->merge(['class' => 'cursor-pointer p-1']) }}
  x-on:click="label = 'copied'; setTimeout(() => label = '{{ $text }}', 1000); $clipboard(@js($text));">
  <span x-text="label"></span>
</span>