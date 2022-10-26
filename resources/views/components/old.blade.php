<div class="bg-neutral-100 dark:bg-neutral-900 dark:text-white text-neutral-600 h-screen flex overflow-hidden text-sm">
    {{-- sidebar --}}
    <x-templates.sidebar />
    {{-- content --}}
    <div class="flex-grow overflow-hidden h-full flex flex-col">
        <x-templates.header />
        <div class="flex-grow flex overflow-x-hidden relative">

            @isset($aside)
                {{ $aside }}
                @endif
                <div
                    class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto duration-1000 transition-[flex-basis] basis-full">
                    <x-jet-banner />
                    {{ $slot }}
                </div>
            </div>

        </div>
    </div>
