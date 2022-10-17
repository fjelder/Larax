@props(['contract', 'active'])
@php
    if ($contract->id == $active) {
        $active = true;
    }
    var_dump($active);
    $classes = $active ?? false ? 'bg-white p-3 w-full flex flex-col rounded-md dark:bg-neutral-800 shadow' : 'bg-transparent p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow-lg relative ring-2 ring-blue-500 focus:outline-none';
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    <div
        class="flex xl:flex-row flex-col items-center justify-between font-medium text-neutral-900 dark:text-white pb-2 mb-2 xl:border-b border-neutral-200 border-opacity-75 dark:border-neutral-700 w-full">
        <div
            class="flex-shrink-0 mr-2 rounded-md flex justify-center items-center py-0.5 px-2 text-xs bg-transparent border">
            #<span class="font-semibold pl-1">{{ $contract->id }}</span>
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
                <div class="text-xs py-1 px-2 leading-none dark:bg-neutral-900 bg-secondary-100 text-secondary-500 rounded-md">
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
