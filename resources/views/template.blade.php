<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="dark2">
    <div
        class="bg-neutral-100 dark:bg-neutral-900 dark:text-white text-neutral-600 h-screen flex overflow-hidden text-sm">
        {{-- sidebar --}}
        <x-templates.sidebar />
        {{-- content --}}
        <div class="flex-grow overflow-hidden h-full flex flex-col">
            <x-templates.header />
            <x-templates.content-with-aside />
        </div>
    </div>
</body>

</html>
