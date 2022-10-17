<x-app-layout>

  <x-slot name="header">
    <h2 class="text-lg font-medium leading-tight">
      Lista kontraktów
    </h2>
  </x-slot>

  <x-slot name="aside">
    <livewire:aside.contract />
  </x-slot>
  <div class=" py-10 mx-auto container sm:px-6 lg:px-8 flex flex-col md:flex-row flex-wrap items-start">
    <aside>
      <ul class="additional-menu">
        <div class="title">
          <i class="ph-bird"></i>
          <span>Nawigacja</span>
        </div>
        <li><a href="{{ route('contracts.create') }}" class="active">
            <i class="ph-plus"></i>
            <span>Nowy kontrakt</span></a></li>
        <li><a href="{{ route('contracts.create') }}">
            <i class="ph-pencil-line"></i>
            <span>Edytuj wybrany</span></a></li>
      </ul>

      <ul class="additional-menu">
        <div class="title">
          <i class="ph-sliders"></i>
          <span>Filtry</span>
        </div>
        <li><a href="{{ route('contracts.create') }}" class="active">
            <i class="ph-plus"></i>
            <span>Nowy kontrakt</span></a></li>
        <li><a href="{{ route('contracts.create') }}">
            <i class="ph-pencil-line"></i>
            <span>Edytuj wybrany</span></a></li>
      </ul>
    </aside>
    <div class="content flex-1 ml-6 border-0 dark:border-neutral-600 dark:text-neutral-300 text-neutral-700">

      <div class="mb-12">
        <x-ui.contract-search />
      </div>
      @foreach ($contracts as $contract)
      <a href="{{ route('contracts.show', $contract->id) }}" class="">
        <div
          class="bg-transparent border-b border-x-0 hover:bg-neutral-200 py-2 px-6 text-sm flex space-x-4 items-center dark:border-primary-700/30 hover:dark:bg-neutral-600">
          <div
            class=" border-primary-400 dark:border-primary-800 border rounded-md text-center text-white bg-primary-600 flex items-center justify-center text-base p-1 w-14">
            #{{ $contract->id }}
          </div>
          <div class="w-full">
            <div class="flex justify-between items-start">
              <p class="py-2">
                <span class="text-primary-500">{{ $contract->name }}</span>
              </p>

              @switch($contract->contract_stage_id)
              @case(1)
              <p class="text-xs bg-secondary-300 rounded-md p-0.5 font-medium">
                Koncepcja
              </p>
              @break

              @case(2)
              <p class="text-xs bg-emerald-300 rounded-md p-0.5 font-medium">
                Projekt wykonawczy
              </p>
              @break

              @case(3)
              <p class="text-xs bg-neutral-800 text-white rounded-md p-0.5 font-medium">
                Dokumentacja powykonawcza
              </p>
              @break
              @endswitch

            </div>

            <div class="flex justify-between items-center">
              <p class="py-1 flex items-center space-x-3">
                @switch($contract->contract_stage_id)
                @case(1)
                <i class="ph-gas-pump text-2xl"></i>
                <span>Realizacja</span>
                @break

                @case(2)
                <i class="ph-archive text-2xl"></i>
                <span>Archiwum</span>
                @break

                @case(3)
                <i class="ph-folder text-2xl"></i>
                <span>Przygotowanie oferty</span>
                @break
                @endswitch
              </p>
              <p class="py-1 flex items-center space-x-3">
                <i class="ph-calendar text-2xl"></i>
                <span>Zakończenie: <strong>{{ $contract->stop_date }}</strong></span>
              </p>
            </div>
          </div>
        </div>
      </a>
      @endforeach


    </div>




  </div>




</x-app-layout>
