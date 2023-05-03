<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('assets/styles/style.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>CamargoLabs</title>

</head>

<body class="antialiased">
    <nav class="bg-transparent">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CamargoLabs</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-blue-700 hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-black rounded md:bg-transparent md:text-black-700 md:p-0 md:dark:text-black-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Reclamações</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contato</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full absolute top-[-7em] blob-maker">
        <img src="assets/img/blob-maker.svg" />
    </div>

    <section class="section-one">

        <div class="flex flex-wrap justify-around items-center content-center main-top">
            <div>
                <h1 class="mt-2 block mt-1 text-5xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">Bem-Vindo(a) ao CamargoLabs!</h1>

                <p class="block mt-1 leading-tight font-semibold text-gray-200 drop-shadow-lg">
                    Com nossa plataforma fácil de usar, você pode se comunicar facilmente com a equipe de suporte
                    técnico da escola para relatar problemas ou compartilhar sugestões.
                </p>

            </div>

            <div>
                <img src="assets/img/main-group.svg" alt="">
            </div>

        </div>

    </section>

    <section>
        <div class="text-center w-[70%] m-auto mb-[2em]">
            <h1 class="mt-2 block mt-1 text-5xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">Dê voz às suas necessidades</h1>
            <p class="block mt-1 leading-tight text-2xl text-gray-400 drop-shadow-lg">No CamargoLabs, acreditamos que a comunicação aberta e transparente é essencial para criar um ambiente acadêmico de qualidade. É por isso que disponibilizamos as funcionalidades de reclamações e sugestões, para que você possa expressar suas necessidades e contribuir para melhorias no laboratório de informática.</p>
        </div>

        <div class="flex items-center content-center flex-wrap m-auto cards">
            <div class="mb-3 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl card">
                <div class="md:flex">
                    <div class="">
                        <img class="h-50 w-xl object-cover md:h-full md:w-2xl bg-gray-500" 
                        src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" 
                        alt="reclamacoes-robot">
                    </div>
                    <div class="p-8">

                        <h4 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                            Reclamações
                        </h4>

                        <h6 class="mt-2 block mt-1 text-lg leading-tight font-medium text-black">
                            Encontrou problemas no
                            laboratório de informática?
                        </h6>

                        <p class="mt-2 text-slate-500"> 
                            Não se preocupe, use nossa plataforma para relatar reclamações!
                            Com apenas alguns cliques, você pode relatar um problema diretamente para a equipe de suporte
                            técnico e receber uma resposta rápida e eficiente. 
                        </p>

                        <a href="#" 
                            class="mt-4 w-max inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#DE3F4D] rounded-lg hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-blue-300"
                        >
                            Confira
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mb-3 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl card">
                <div class="md:flex">
                    <div class="">
                        <img class="h-50 w-full object-cover md:h-full md:w-2xl bg-gray-500" src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="contact-computer">
                    </div>
                    <div class="p-8">

                        <h4 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                            Contato & Sugestões
                        </h4>

                        <h6 class="block mt-1 text-lg leading-tight font-medium text-black">
                            Quer melhorar a experiência no
                            laboratório de informática ou está com problemas?
                        </h6>

                        <p class="mt-2 text-slate-500">
                            Nós podemos ajudar! Com o CamargoLabs, é fácil relatar problemas,
                            enviar sugestões e se comunicar com nossa equipe de suporte técnico. 
                            Não deixe que problemas técnicos o impeçam de ter uma experiência acadêmica agradável.
                        </p>

                        <a href="#" class="mt-4 w-max inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#DE3F4D] rounded-lg hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Confira
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="hello">

        <div class="custom-shape-divider-top-1683154805">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="title">
            <h1 class="border-b-4 border-[#DE3F4D] block pb-3 text-6xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5"> 
                Nosso Objetivo 
            </h1>
            <p class="block mt-1 leading-tight text-xl text-gray-200 drop-shadow-lg">
                No CamargoLabs, nosso objetivo é tornar sua experiência no laboratório de informática mais suave e agradável. Nosso sistema fácil de usar permite que você relate problemas, envie sugestões e se comunique diretamente com nossa equipe de suporte técnico. Queremos garantir que você possa se concentrar em seus estudos, sem se preocupar com problemas técnicos ou processos complicados.
            </p>
        </div>

        <div class="custom-shape-divider-bottom-1683154878">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

    </section>


</body>

</html>