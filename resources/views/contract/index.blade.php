<x-app-layout>

  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      Lista kontraktów
    </h2>
  </x-slot>


  <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <aside class="">
      <ul class="w-64 bg-white border rounded-sm shadow-sm additional-menu">
        <p>Nawigacja</p>
        <li><a href="{{route('contracts.create')}}" class="active">
        <i class="ph-plus"></i>
        <span>Nowy kontrakt</span></a></li>
        <li><a href="{{route('contracts.create')}}">
        <i class="ph-pencil-line"></i>
        <span>Edytuj wybrany</span></a></li>
      </ul>
    </aside>
    @foreach ($contracts as $contract)
    <p>This is contract: <strong>{{ $contract->id }}.</strong> {{ $contract->prefix }} ----{{ $contract->name }}</p>
    @endforeach
  </div>




</x-app-layout>
