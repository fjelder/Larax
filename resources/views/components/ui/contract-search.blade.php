<form>
  <div class="flex shadow">
    <label for="search-dropdown"
      class="mb-2 text-sm font-medium text-neutral-900 sr-only dark:text-neutral-300">Wyszukaj
      kontrakt</label>
    <button id="dropdown-button" data-dropdown-toggle="dropdown"
      class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-neutral-900 bg-neutral-100 border border-neutral-300 rounded-l-none hover:bg-neutral-200 focus:ring-4 focus:outline-none focus:ring-neutral-100 dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:focus:ring-neutral-700 dark:text-white dark:border-neutral-600"
      type="button">Wszystkie kategorie <svg aria-hidden="true" class="ml-1 w-4 h-4" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"></path>
      </svg></button>
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-neutral-100 shadow dark:bg-neutral-600"
      data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
      style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
      <ul class="py-1 text-sm text-neutral-700 dark:text-neutral-200" aria-labelledby="dropdown-button">
        <li>
          <button type="button"
            class="inline-flex py-2 px-4 w-full hover:bg-neutral-100 dark:hover:bg-neutral-500 dark:hover:text-white">Archiwum</button>
        </li>
        <li>
          <button type="button"
            class="inline-flex py-2 px-4 w-full hover:bg-neutral-100 dark:hover:bg-neutral-500 dark:hover:text-white">Realizacja</button>
        </li>
        <li>
          <button type="button"
            class="inline-flex py-2 px-4 w-full hover:bg-neutral-100 dark:hover:bg-neutral-500 dark:hover:text-white">Przygotowanie</button>
        </li>
        <li>
          <button type="button"
            class="inline-flex py-2 px-4 w-full hover:bg-neutral-100 dark:hover:bg-neutral-500 dark:hover:text-white">Wszystkie</button>
        </li>
      </ul>
    </div>
    <div class="relative w-full">
      <input type="search" id="search-dropdown"
        class="block p-2.5 w-full z-20 text-sm text-neutral-900 bg-neutral-50 rounded-r-none border-l-neutral-50 border-l-2 border border-neutral-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-700 dark:border-l-neutral-700  dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-white dark:focus:border-primary-500"
        placeholder="Wyszukaj ..." required="">
      <button type="submit"
        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-primary-700 rounded-r-none border border-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <span class="sr-only">Search</span>
      </button>
    </div>
  </div>
</form>
