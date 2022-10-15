<x-temp-page-with-aside>
    <x-slot name="aside">
        <x-ui.additional-menu>
            <x-slot name="title">
                <i class="ph-bird"></i>
                <span>Nawigacja</span>
            </x-slot>
            <li><a href="{{ route('contracts.index') }}" class="active">
                    <i class="ph-list"></i>
                    <span>Lista kontraktów</span></a></li>
        </x-ui.additional-menu>
    </x-slot>
    <x-ui.contract-search />
</x-temp-page-with-aside>
