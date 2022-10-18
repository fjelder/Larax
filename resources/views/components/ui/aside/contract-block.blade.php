@props(['contract', 'active'])
@php

if ($contract->id == $active->id) {
$classes = 'bg-primary-50 p-3 w-full flex flex-col rounded-sm dark:bg-gray-800 shadow-md relative ring-1
ring-primary-500/30
focus:outline-none';
}
else
{
$classes = 'bg-white p-3 w-full flex flex-col rounded-sm dark:bg-neutral-800 shadow hover:scale-105';
}

@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
  <div
    class="flex xl:flex-row flex-col items-center justify-between font-medium text-neutral-900 dark:text-white pb-2 mb-2 xl:border-b border-neutral-200 border-opacity-75 dark:border-neutral-700 w-full text-xs">
    <div class="flex-shrink-0 mr-2 rounded-md flex justify-center items-center py-0.5 px-2 bg-transparent border">
      #<span class="font-semibold pl-1 text-secondary-700">{{ $contract->id }}</span>
    </div>
    {{ $contract->name }}
  </div>
  <div class="flex items-center w-full">
    @switch($contract->stage_id)
    @case(1)
    <div class="text-xs py-1 px-2 leading-none dark:bg-neutral-900 bg-primary-100 text-primary-500 rounded-md">
      Realizacja
    </div>
    @break

    @case(2)
    <div class="text-xs py-1 px-2 leading-none dark:bg-neutral-900 bg-emerald-100 text-emerald-500 rounded-md">
      Przygotowanie
    </div>
    @break

    @case(3)
    <div class="text-xs py-1 px-2 leading-none dark:bg-neutral-900 bg-neutral-100 text-neutral-500 rounded-md">
      Archiwum
    </div>
    @break

    @default
    @break
    @endswitch

    <div class="ml-auto text-xs text-neutral-500">
      {{ $contract->stop_date }}
    </div>
  </div>
</button>
