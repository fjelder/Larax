@props([
'contract'])
<div class="bg-white">
  <div
    class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-y-16 gap-x-8 py-24 px-4 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $contract->name }}</h2>
      <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of
        Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to
        archive important task lists.</p>

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Indywidualny numer kontraktu</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $contract->id }}</dd>
        </div>

        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Skórcona nazwa kontraktu</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $contract->name }}</dd>
        </div>

        <div class="border-t border-gray-200 pt-4 col-span-2">
          <dt class="font-medium text-gray-900">Nazwa zadania</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $contract->task_name }}</dd>
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
    <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
      <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
        alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
        class="rounded-lg bg-gray-100">
      <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
        alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
      <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
        alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
      <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
        alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
    </div>
  </div>
</div>
