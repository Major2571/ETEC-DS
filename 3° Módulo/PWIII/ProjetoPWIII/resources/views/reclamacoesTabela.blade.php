<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Controle de Reclamações</h1>
            <p class="text-lg text-gray-300 mt-4">Bem-vindo ao painel de controle de reclamações. Aqui você pode
                gerenciar todas as reclamações registradas pelos alunos.</p>
        </div>
    </x-slot>

    <section>

        <div class="w-4/5 my-5 m-auto">
            <div class="filter text-gray-300 m-auto">
                <form method="GET" action="{{ route('reclamacoes') }}" class="w-96">

                    <div class="flex items-end justufy-center">
                        <div class="mr-2 w-3/4">
                            <label for="filtroLab" class="block mb-2 font-medium">
                                Filtre por Laboratório:
                            </label>
                            <select name="filtroLab" id="filtroLab"
                                class="bg-gray-700 border border-gray-600 text-gray-300 text-md rounded-lg focus:ring-[#DE3F4D] focus:border-[#DE3F4D] block w-full p-2.5">
                                <option value="">Todos</option>
                                @foreach ($lab as $nLab)
                                    <option value="{{ $nLab->id }}" {{ $filtroLab == $nLab->id ? 'selected' : '' }}>
                                        {{ $nLab->laboratorio }}
                                    </option>
                                @endforeach

                            </select>
                        </div>



                        <button type="submit"
                            class="p-3 text-sm font-medium text-white bg-[#d33f57] rounded-lg border border-[#d33f57] hover:bg-[#DE3F4D] focus:ring-2 focus:outline-none focus:ring-[#d33f57]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <div class="tabela relative m-auto w-4/5 overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-left text-base text-black">

                <thead class="text-lg text-white bg-[#d33f57] dark:text-white ">
                    <tr>
                        <!-- <th scope="col" class="px-6 py-3">
                        idRec
                    </th> -->

                        <th scope="col" class="px-4 py-3 text-center">
                            Laboratório
                        </th>

                        <th scope="col" class="px-4 py-3 text-center">
                            PC
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Título
                        </th>

                        <th scope="col" class="px-6 py-3 w-1/3">
                            Descrição
                        </th>

                        <th scope="col" class="px-4 py-3">
                            Data e Horário
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            editar
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Apagar
                        </th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($reclamacoes as $rec)
                        <tr
                            class="bg-[#161B26] border-b dark:bg-[#161B26] dark:border-gray-700 hover:bg-[#1C2230] dark:hover:bg-[#1C2230] text-gray-300 text-base">
                            <!--
                        <td class="px-6 py-4">
                            {{ $rec->id }}
                        </td> -->

                            <td class="px-4 py-4 text-center">
                                {{ $rec->laboratorio->laboratorio }}
                            </td>

                            <td class="px-4 py-4 text-center">
                                {{ $rec->pc }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rec->titulo }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rec->descricao }}
                            </td>

                            <td class="px-6 py-4">
                                {{ date('d/m/y, h:ia', strtotime($rec->dtCriacao)) }}
                            </td>

                            <td class="px-6 py-4 text-red-300 uppercase">
                                {{ $rec->status }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                <a 
                                href="{{ route('editRec', $rec->id) }}"
                                    >
                                    <button type="button"
                                        class="mr-2 inline-flex items-center rounded-lg border border-blue-600 p-2.5 text-center font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-200">
                                        <i class="fa-solid fa-edit"></i>
                                    </button>
                                </a>
                            </td>


                            <td class="px-6 py-4 text-center w-2">
                                <a href="{{ route('deleteRec', $rec->id) }}">
                                    <button type="button" onclick="confirmExclusao(event)"
                                        class="mr-2 inline-flex items-center rounded-lg border border-red-600 p-2.5 text-center font-medium text-red-500 hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-200">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </section>
</x-app-layout>

<script>
    function confirmExclusao(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Confirmação de Exclusão',
            text: 'Tem certeza que deseja excluir este item?',
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
