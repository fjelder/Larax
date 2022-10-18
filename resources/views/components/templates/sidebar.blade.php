<div
  class="bg-white dark:bg-neutral-900 dark:border-neutral-800 w-20 flex-shrink-0 border-r border-neutral-200 flex-col hidden sm:flex">
  {{-- logo --}}
  <x-ui.logo class="w-9" />
  <div class="flex mx-auto flex-grow mt-4 flex-col text-neutral-400 space-y-4 sidebar-menu">
    <a href="{{ route('dashboard') }}" class="{{ active('dashboard') }}">
      <i class="ph-house-line"></i>
    </a>
    <a href="{{ route('contracts.index') }}" class="{{ active('contracts.*') }}">
      <i class="ph-folders"></i>
    </a>
    <a href="{{ route('contracts.index') }}">
      <i class="ph-address-book"></i>
    </a>
  </div>
</div>
