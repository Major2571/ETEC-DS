<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CamargoLabsAdm') }}</title>

    <link rel="stylesheet" href="{{ url('assets/styles/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

</head>

<body class="font-sans antialiased">
    <div class="max-h-full min-h-screen bg-transparent">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-[#1e293b] shadow">
                <div class="mx-auto max-w-7xl py-10 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="m-0 bg-none">
        <div class="mx-auto w-full max-w-screen-xl p-4 md:py-8">
            <hr class="my-6 border-gray-700 sm:mx-auto lg:my-10" />
            <span class="block text-sm text-gray-500 dark:text-gray-400 sm:text-center">&copy; 2023. All Rights
                Reserved.</span>
        </div>
    </footer>

    <script src={{ url('assets/js/modals/modalDelete.js') }}></script>
    <script src={{ url('assets/js/modals/modalSuccess.js') }}></script>
    <script src={{ url('assets/js/modals/modalSuccessForm.js') }}></script>
    <script src={{ url('assets/js/toggleDiv.js') }}></script>
    <script src="assets/js/viaCEP.js"></script>
</body>

</html>
