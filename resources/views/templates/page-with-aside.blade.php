<x-app-layout>

    <x-slot name="header">
        @isset($header)
            <h2 class="text-lg font-medium leading-tight">
                {{ $header }}
            </h2>
            @endif
        </x-slot>

        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8 flex flex-col md:flex-row flex-wrap items-start">
            @isset($aside)
                <aside>
                    {{ $aside }}
                </aside>
                @endif

                <div class="content flex-1 ml-6 border-0 dark:border-neutral-600 dark:text-neutral-300 text-neutral-700">
                    {{ $slot }}
                </div>

            </div>

        </x-app-layout>
