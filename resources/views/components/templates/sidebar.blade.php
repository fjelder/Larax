<div
    class="bg-white dark:bg-neutral-900 dark:border-neutral-800 w-20 flex-shrink-0 border-r border-neutral-200 flex-col hidden sm:flex sm:items-center sm:justify-center">
    {{-- logo --}}
    <x-ui.logo class="w-9" />
    <div class="flex mx-auto flex-grow mt-4 flex-col text-neutral-400 space-y-4 sidebar-menu justify-center">
        <a href="{{ route('dashboard') }}" class="{{ active('dashboard') }}">
            <x-heroicon-s-home class="w-5 h-5" />
        </a>
        <a href="{{ route('contracts.show', UserHelper::Sets()->contract_current_id) }}"
            class="{{ active('contracts.*') }}">
            <x-heroicon-o-folder class="w-5 h-5" />
        </a>
        <a href="{{ route('contracts.index') }}">
            <x-heroicon-o-users class="w-5 h-5" />
        </a>
    </div>
</div>
