<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/styles/style.css">

    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>CamargoLabs</title>

</head>

<body class="antialiased">
    <nav class="bg-transparent">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CamargoLabs</span>
            </a>
            <div class="flex md:order-2">
                <a href="/login"
                    class=" font-medium block py-2 px-5 text-gray-100 rounded hover:bg-[#d33f57] hover:text-[#0f172a]"
                    aria-current="page">
                    Login
                </a>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="font-medium block py-2 px-5 text-gray-100 rounded hover:bg-[#d33f57] hover:text-[#0f172a]"
                            aria-current="page">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/mande-uma-reclamacao"
                            class="font-medium block py-2 px-5 text-gray-100 rounded hover:bg-[#d33f57] hover:text-[#0f172a]">
                            Reclamações
                        </a>
                    </li>
                    <li>
                        <a href="/mande-uma-sugestao"
                            class="font-medium block py-2 px-5 text-gray-100 rounded hover:bg-[#d33f57] hover:text-[#0f172a]">
                            Contato
                        </a>
                    </li>
                    <li>
                        <a href="/quem-somos"
                            class="font-medium block py-2 px-5 text-gray-100 rounded hover:bg-[#d33f57] hover:text-[#0f172a]">
                            Sobre
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')



    <footer class="bg-none m-0">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CamargoLabs</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-100 sm:mb-0 dark:text-gray-100">
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Inicio</a>
                    </li>
                    <li>
                        <a href="/mande-uma-reclamacao" class="mr-4 hover:underline md:mr-6">Reclamações </a>
                    </li>
                    <li>
                        <a href="/mande-uma-sugestao" class="mr-4 hover:underline md:mr-6 ">Contato</a>
                    </li>
                    <li>
                        <a href="/quem-somos" class="hover:underline">Sobre</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-100 sm:text-center dark:text-gray-100">&copy; 2023. All Rights
                Reserved.</span>
        </div>
    </footer>

    <script src="assets/js/modals/modalSuccessForm.js"></script>

</body>

</html>
