<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Cadastre um novo Laboratório</h1>
            <p class="text-lg text-gray-300 mt-4">Preencha o formulário abaixo para cadastrar um novo laboratório. Lembre-se de seguir o padrão 'Lab00' ( 'Lab' + N° do Laboratório )</p>
          </div>
    </x-slot>

    <section class="cad-form my-10">
        <div class="w-full flex flex-wrap justify-center items-center content-center main-top">
            <div class="lg:w-1/4 md:w-2/5">
                <form action="/laboratorio" method="post" id="cadastroForm"
                    class="bg-slate-100 shadow-md rounded px-8 py-10 mb-4 w-full m-auto">

                    @csrf
                    <h1 class="text-2xl font-bold text-center text-gray-800 mb-10">
                         Cadaste um novo Laboratório
                    </h1>

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
                        <input type="submit" value="Cadastrar"
                            class="text-white bg-[#DE3F4D] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md w-full sm:w-auto px-8 py-2 text-center mt-5 cursor-pointer" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 w-1/2 m-auto">
        @foreach ($lab as $dadosLab)
            <div
                class="relative card-vacina border border-gray-600 flex justify-evenly items-center p-5 rounded-md w-full bg-gray-700">
                <div class="w-1/3 p-3 mr-3 rounded-full border border-gray-600">
                    <img src="https://img.icons8.com/?size=512&id=gvQUkpW15e1x&format=png" alt="" class="img-lab">
                </div>

                <div class="">
                    <div class="inline-flex flex-wrap text-md font-semibold items-center">
                        <div class="bg-[#1e4cb2] text-white uppercase px-3 py-1 rounded-full">
                            <span>
                                #0{{ $dadosLab->id }}
                            </span>
                        </div>
                    </div>

                    <div class="font-bold py-1.5 text-gray-200 text-lg ">
                        <span>
                            {{ $dadosLab->laboratorio }}
                        </span>
                    </div>

                    <div
                        class="absolute inset-0 flex justify-center items-center opacity-0 flex-wrap transition-opacity duration-300 rounded-md">
                        {{-- <a href="{{ route('editVacina', $vacinas->id) }}">
                            <button type="button"
                                class="border border-blue-600 hover:bg-blue-700 bg-blue-600 text-white focus:ring-2 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                <svg aria-hidden="true" class="w-5 h-5 mr-5" fill="currentColor" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                                Editar
                            </button>
                        </a> --}}

                        <a href="/laboratorio/excluir/{{ $dadosLab->id }}">
                            <button type="button" onclick="confirmExclusao(event)"
                                class="bg-red-500 border border-red-600 hover:bg-red-700 text-white focus:ring-2 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 448 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                                Excluir
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <section>
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
                                    <button type="button" onclick="confirmExclusao(event)"
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
    </section> --}}

</x-app-layout>

<script>
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Laboratório Cadastrado com Sucesso!',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            event.target.submit();
        });
    });

    function confirmExclusao(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Confirmação de Exclusão',
            text: 'Tem certeza que deseja excluir este laboratório?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DE3F4D',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = event.target.closest('a').href;
            }
        });
    }
</script>
