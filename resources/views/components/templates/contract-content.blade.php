@props([
'contract'])

<div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
  <div>
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $contract->name }}</h2>
    <p class="mt-4 font-medium text-gray-900">Nazwa zadania</p>
    <p class="text-gray-500">{{ $contract->task_name }}</p>

    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-4 sm:gap-y-16 lg:gap-x-8">
      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Indywidualny numer kontraktu</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->id }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Skórcona nazwa kontraktu</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->name }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Numer umowy</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->number }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Prefix</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->prefix }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Data rozpoczęcia</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->start_date }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Data zakończenia</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->stop_date }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Status kontraktu</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->stage_id }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Stadium kontraktu</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->study_id }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Data utworzenia</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->created_at }}</dd>
      </div>

      <div class="border-t border-gray-200 pt-4">
        <dt class="font-medium text-gray-900">Ostatnia aktualizacja</dt>
        <dd class="mt-2 text-sm text-gray-500">{{ $contract->updated_at }}</dd>
      </div>
    </dl>
  </div>
</div>
