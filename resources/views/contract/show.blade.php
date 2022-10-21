<x-app-layout>

  <x-slot name="aside">
    <livewire:aside.contract />
  </x-slot>




  <div
    class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
    <div class="flex w-full items-center">
      <div class="flex items-center text-2xl text-gray-900 dark:text-white">
        <div
          class="border-secondary-400 rounded-md w-14 h-auto text-white p-2 mr-4 fill-white border-2 shadow-lg bg-neutral-100">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <path d="M216.9,208H39.4a7.4,7.4,0,0,1-7.4-7.4V80H216a8,8,0,0,1,8,8V200.9A7.1,7.1,0,0,1,216.9,208Z"
              fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path>
            <path d="M32,80V52a8,8,0,0,1,8-8H92.4a8,8,0,0,1,6,2.7L128,80" fill="none" stroke="#000000"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path>
            <line x1="104" y1="144" x2="152" y2="144" fill="none" stroke="#000000" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="24"></line>
            <line x1="128" y1="120" x2="128" y2="168" fill="none" stroke="#000000" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="24"></line>
          </svg>
        </div>

        {{$contract->name}}
      </div>
      <div class="ml-auto sm:flex hidden items-center justify-end">
        <div class="text-right">
          <div class="text-xs text-gray-400 dark:text-gray-400">Account balance:</div>
          <div class="text-gray-900 text-lg dark:text-white">$2,794.00</div>
        </div>
        <button
          class="w-8 h-8 ml-4 text-gray-400 shadow dark:text-gray-400 rounded-full flex items-center justify-center border border-gray-200 dark:border-gray-700">
          <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
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
      <a href="#" class="px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5">Projekty</a>
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
