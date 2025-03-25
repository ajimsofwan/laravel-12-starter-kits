@props(['name' => '', 'order' => 'order', 'sort' => ''])
<th scope="col" {{ $attributes->merge(['class' => 'px-2 py-3 cursor-pointer md:px-6']) }}
  wire:click="sortBy('{{ $name }}')">
  <span class="flex items-center">
    {{ $slot }}
    <x-icon-sort class="ml-1" sort="{{ $order == $name ? $sort : '' }}" />
  </span>
</th>
