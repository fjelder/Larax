<x-app-layout>

    <x-slot name="aside">
        <livewire:aside.contract />
    </x-slot>


    <div
        class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
        <div class="flex w-full items-center">
            <div class="flex items-center text-2xl text-gray-900 dark:text-white">
                <div
                    class="border-neutral-200 rounded-md w-14 h-auto text-white p-2 mr-4 fill-white border-2 shadow-lg bg-neutral-100">
                    @switch($contract->stage_id)
                        @case(1)
                            <x-ui.icon.realisation />
                        @break

                        @case(2)
                            <x-ui.icon.prepare />
                        @break

                        @case(3)
                            <x-ui.icon.archive />
                        @break

                        @default
                            <x-ui.icon.archive />
                        @break
                    @endswitch
                </div>

                {{ $contract->name }}
            </div>
            <div class="ml-auto sm:flex hidden items-center justify-end">
                <div class="text-right">
                    <div class="text-xs text-gray-400 dark:text-gray-400">Account balance:</div>
                    <div class="text-gray-900 text-lg dark:text-white">$2,794.00</div>
                </div>
                <button
                    class="w-8 h-8 ml-4 text-gray-400 shadow dark:text-gray-400 rounded-full flex items-center justify-center border border-gray-200 dark:border-gray-700">
                    <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <a href="#"
                class="px-3 border-b-2 border-primary-500 text-primary-500 dark:text-white dark:border-white pb-1.5">Informacje</a>
            <a href="#"
                class="px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5">Projekty</a>
            <a href="#"
                class="px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5 sm:block hidden">Korespondencja</a>
            <a href="#"
                class="px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5 sm:block hidden">Obiekty</a>
            <a href="#"
                class="px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5 sm:block hidden">Cards</a>
        </div>
    </div>
    <div class="sm:p-7 p-4">
        <x-templates.contract-content :contract="$contract" />
    </div>


</x-app-layout>
