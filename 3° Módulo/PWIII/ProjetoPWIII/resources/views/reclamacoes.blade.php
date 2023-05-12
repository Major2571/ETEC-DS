@extends('templates.head')

<title>Reclamações</title>

@section('content')
<div class="w-full absolute blob-maker blob-sec lg:top-[-22em] md:top-[-2em] drop-shadow-lg">
    <img src="assets/img/blob-maker.svg" />
</div>

<section class="form">

    <div class="flex flex-wrap justify-center items-center content-center main-top">

        <div class="px-8 pt-6 pb-8 mb-4 lg:w-1/4 md:w-4/5">
            <h1 class="mt-2 block mt-1 text-4xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">
                Reclamações
            </h1>
            <p class="block mt-1 leading-tight text-xl lg:text-gray-400 md:text-gray-200 drop-shadow-lg">
                No CamargoLabs, levamos a sério qualquer problema que possa afetar sua experiência no laboratório de informática.
                </br>
                Se você encontrou algum problema, como um computador com defeito, um teclado com problemas, ou qualquer outra coisa que esteja impedindo você de estudar, queremos saber.
                </br>
                Use o formulário ao lado para nos informar sobre o problema. Nossa equipe de suporte técnico entrará em contato o mais rápido possível para resolver o problema e garantir que você possa se concentrar em seus estudos novamente.
                </br>
                Agradecemos por nos ajudar a melhorar o ambiente acadêmico!
            </p>
        </div>

        <div class="lg:w-1/4 md:w-1/2">
            <form action="/reclamacoes" method="post" class="bg-white shadow-lg rounded-md px-9 py-10 mb-2 w-full m-auto">

                @csrf

                <div class="grid md:grid-cols-2 md:gap-6">

                    <div class="relative z-0 w-full mb-6 group">

                        <label for="txLab" class="sr-only">Underline select</label>

                        <select id="txLab" name="txLab" class="block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-300 focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer">

                            <option value="">N° Laboratório</option>

                            @foreach($lab AS $dadosLab)
                            <option value="{{$dadosLab -> id}}">
                                {{$dadosLab -> laboratorio}}
                            </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="txPc" id="txPc" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer" placeholder=" " required />
                        <label for="txPc" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            N° Computador
                        </label>
                    </div>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txTitulo" id="txTitulo" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer" placeholder=" " required />
                    <label for="txTitulo" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Título
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <textarea type="text" name="txDescricao" id="txDescricao" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer" placeholder=" " required></textarea>
                    <label for="txDescricao" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Descrição
                    </label>
                </div>

                <div class="flex items-center content-center flex-wrap m-auto justify-center">
                    <input type="submit" value="Enviar" class="text-white bg-[#DE3F4D] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md w-full sm:w-auto px-8 py-2 text-center mt-5 cursor-pointer" />
                </div>

            </form>
        </div>

    </div>

</section>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-auto lg:w-4/5 md:w-4/5">
    <form action="/reclamacoes" method="get" class="flex items-center w-3/5">
        <div class="flex w-1/2">
            <div>
                <div class="relative w-full">
                    <select id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <option value="">N° do Laboratório</option>

                        @foreach($lab AS $dadosLab)
                        <option value="{{$dadosLab -> id}}">
                            {{$dadosLab -> laboratorio}}
                        </option>
                        @endforeach

                    </select>
                </div>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </form>

    @if($search)
    <h2 class="text-gray-300 text-base">
        Reclamações do Laboratório {{ $search }}
    </h2>
    @else
    @endif
</div>



<section>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-auto lg:w-4/5 md:w-4/5">

        <table class="table-fixed w-full text-base text-left text-black dark:text-black">

            <thead class="text-lg text-white bg-[#1e4cb2] dark:text-white">
                <tr>
                    <!-- <th scope="col" class="px-6 py-3">
                        idRec
                    </th> -->

                    <th scope="col" class="px-6 py-3">
                        idLab
                    </th>

                    <th scope="col" class="px-6 py-3">
                        PC
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>

                    <th scope="col" class="px-6 py-3 w-1/3">
                        Descrição
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Data
                    </th>

                    <th scope="col" class="px-6 py-3 text-center w-1/6">
                        Apagar
                    </th>

                </tr>
            </thead>

            <tbody>
                @foreach($reclamacoes AS $rec)
                <tr class="bg-[#161B26] border-b dark:bg-[#161B26] dark:border-gray-700 hover:bg-[#1C2230] dark:hover:bg-[#1C2230] text-gray-300 text-base">


                    <td class="px-6 py-4">
                        {{$rec -> idLab}}
                    </td>

                    <td class="px-6 py-4">
                        {{$rec -> pc}}
                    </td>

                    <td class="px-6 py-4">
                        {{$rec -> titulo}}
                    </td>

                    <td class="px-6 py-4">
                        {{$rec -> descricao}}
                    </td>

                    <td class="px-6 py-4">
                        {{date('d/m/y', strtotime($rec -> dtCriacao))}}
                    </td>

                    <td class="px-6 py-4 text-center w-2">
                        <a href="/reclamacoes/excluir/{{$rec -> id}}">
                            <button type="button" class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                </svg>
                                <span class="sr-only">trash icon</span>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</section>

@endsection