<x-app-layout>

    <section class="form">
        <div class="w-full flex flex-wrap justify-center items-center content-center main-top">
            <div class="lg:w-1/4 md:w-2/5">
                <form action="/laboratorio" method="post"
                    class="bg-slate-100 shadow-md rounded px-8 py-10 mb-4 w-full m-auto">

                    @csrf

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="txLab" id="txLab"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="txLab"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            N° Laboratorio
                        </label>
                    </div>

                    <div class="flex items-center content-center flex-wrap m-auto justify-center">
                        <input type="submit" value="Enviar"
                            class="text-white bg-[#DE3F4D] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md w-full sm:w-auto px-8 py-2 text-center mt-5 cursor-pointer" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-auto lg:w-1/2 md:w-4/5">

            <table class="table-fixed w-full text-base text-left text-black dark:text-black">

                <thead class="text-lg text-white bg-[#1e4cb2] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            IdLaboratorio
                        </th>

                        <th scope="col" class="px-6 py-3">
                            N° Laboratório
                        </th>

                        <th scope="col" class="px-6 py-3 text-center w-1/6">
                            Apagar
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($lab as $dadosLab)
                        <tr
                            class="bg-[#161B26] border-b dark:bg-[#161B26] dark:border-gray-700 hover:bg-[#1C2230] dark:hover:bg-[#1C2230] text-gray-300 text-base">

                            <td class="px-6 py-4">
                                {{ $dadosLab->id }}
                            </td>

                            <td>
                                {{ $dadosLab->laboratorio }}
                            </td>

                            <td class="px-6 py-4 text-center w-2">
                                <a href="/laboratorio/excluir/{{ $dadosLab->id }}">
                                    <button type="button"
                                        class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                        </svg>
                                        <span class="sr-only">trash icon</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>

</x-app-layout>
