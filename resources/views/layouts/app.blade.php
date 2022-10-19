<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="https://unpkg.com/phosphor-icons"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="font-sans antialiased">



  <div
    class="bg-neutral-100 dark:bg-neutral-900 dark:text-white text-neutral-600 h-screen flex overflow-hidden text-sm">
    {{-- sidebar --}}
    <x-templates.sidebar />
    {{-- content --}}
    <div class="flex-grow overflow-hidden h-full flex flex-col">
      <x-templates.header />
      <div class="flex-grow flex overflow-x-hidden">
        @isset($aside)
        {{$aside}}
        @endif
        <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
          <x-jet-banner />
          {{$slot}}
        </div>
      </div>

    </div>
  </div>


  <div class="min-h-screen bg-neutral-50 dark:bg-neutral-700 hidden">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow dark:bg-neutral-800/20 dark:text-gray-200 text-gray-600">
      <div class="px-4 py-6 mx-auto container sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>

  @stack('modals')

  @livewireScripts
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script>
  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
      '(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark')
  }
  </script>

</body>

</html>
