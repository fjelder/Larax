@props(['contract', 'active'])
@php

if ($active) {
$classes = 'bg-primary-50 p-3 w-full flex flex-col rounded-sm dark:bg-gray-800 shadow-md relative ring-1
ring-primary-500/30
focus:outline-none';
} else {
$classes = 'bg-white p-3 w-full flex flex-col rounded-sm dark:bg-neutral-800 shadow hover:scale-105';
}

@endphp
<button {{ $attributes->merge(['class' => $classes]) }} wire:click="saveCurrentContract({{ $contract->id }})">
  <div
    class="flex flex-col items-center justify-between w-full pb-2 mb-2 text-xs font-medium border-opacity-75 xl:flex-row text-neutral-900 dark:text-white xl:border-b border-neutral-200 dark:border-neutral-700">
    <div class="flex-shrink-0 mr-2 rounded-md flex justify-center items-center py-0.5 px-2 bg-transparent border">
      #<span class="pl-1 font-semibold text-secondary-700">{{ $contract->id }}</span>
    </div>
    {{ $contract->name }}
  </div>
  <div class="flex items-center w-full">
    @switch($contract->stage_id)
    @case(1)
    <div class="px-2 py-1 text-xs leading-none rounded-md dark:bg-neutral-900 bg-primary-100 text-primary-500">
      Realizacja
    </div>
    @break

    @case(2)
    <div class="px-2 py-1 text-xs leading-none rounded-md dark:bg-neutral-900 bg-emerald-100 text-emerald-500">
      Przygotowanie
    </div>
    @break

    @case(3)
    <div class="px-2 py-1 text-xs leading-none rounded-md dark:bg-neutral-900 bg-neutral-100 text-neutral-500">
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
