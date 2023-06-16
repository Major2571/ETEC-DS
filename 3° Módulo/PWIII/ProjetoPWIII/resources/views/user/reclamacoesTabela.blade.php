<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Controle de Reclamações</h1>
            <p class="mt-4 text-lg text-gray-300">Bem-vindo ao painel de controle de reclamações. Aqui você pode
                gerenciar todas as reclamações registradas pelos alunos.</p>
        </div>
    </x-slot>

    <section>
        <div class="relative m-auto md:w-full lg:w-4/5">
            @foreach ($lab as $nLab)
                <div class="toggle-container">
                    <div class="toggle-header my-2 mx-auto flex w-1/2 content-center justify-between rounded-lg border-b border-gray-500 bg-[#1e293b] py-4 px-10 text-lg text-white cursor-pointer hover:bg-gray-700" onclick="toggleReclamacoes({{ $nLab->id }})">
                        <div class="">
                            <div>
                                {{ $nLab->laboratorio }}
                            </div>
                            <div class="total-reclamacoes text-sm text-gray-500">
                                Total de reclamações: {{ count($reclamacoes->where('idLab', $nLab->id)) }}
                            </div>
                        </div>
                        <button class="toggle-button" data-lab="{{ $nLab->id }}">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                    <div class="hidden reclamacoes toggle-content" data-lab="{{ $nLab->id }}">
                        <div class=" m-auto grid w-1/2 gap-4 md:w-5/6 md:grid-cols-2 lg:w-full lg:grid-cols-4"
                            data-lab="{{ $nLab->id }}">
                            @if ($reclamacoes->where('idLab', $nLab->id)->isEmpty())
                                <div class="col-span-full my-5 flex justify-center text-center">
                                    <img src="https://emoji.discadia.com/emojis/5dc0d721-1d3d-4d4d-af17-e99a8250b1ca.gif"
                                        class="w-10" alt="">
                                    <p class="py-4 px-6 text-gray-300">Sem reclamações</p>
                                    <img src="https://emoji.discadia.com/emojis/5dc0d721-1d3d-4d4d-af17-e99a8250b1ca.gif"
                                        class="w-10" alt="">
                                </div>
                            @else
                                @foreach ($reclamacoes as $rec)
                                    @if ($rec->idLab === $nLab->id)
                                        <div
                                            class="card-reclamacao show relative my-5 rounded-md border border-[#d33f57] bg-slate-100 hover:bg-gray-200" data-lab="{{ $nLab->id }}">
    
                                            <div class="w-full">
                                                <div
                                                    class="flex justify-between rounded-t-sm bg-[#d33f57] px-5 py-2 font-bold text-white">
                                                    <p>N° COMPUTADOR</p>
                                                    <p>
                                                        {{ $rec->pc }}
                                                    </p>
                                                </div>
    
                                                <div class="px-5 pb-12">
                                                    <h1 class="m-auto mt-5 py-2 text-center text-xl font-bold">
                                                        {{ $rec->titulo }}
                                                    </h1>
                                                    <p class="m-auto py-2 text-center">
                                                        {{ $rec->descricao }}
                                                    </p>
                                                </div>
    
                                                <div
                                                    class="absolute bottom-0 left-0 right-0 flex w-full justify-between rounded-b-md px-5 py-4">
                                                    <p>
                                                        <span class="status-{{ strtolower($rec->status) }} font-bold">
                                                            <i class="fa-solid fa-circle"></i>
                                                            {{ $rec->status }}
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span class="font-bold">
                                                            {{ date('d/m/y, h:ia', strtotime($rec->dtCriacao)) }}
                                                        </span>
                                                    </p>
                                                </div>
    
                                                <div
                                                    class="edit-delete absolute inset-0 flex flex-wrap items-center justify-center rounded-md opacity-0 transition-opacity duration-300">
                                                    <a href="{{ route('editRec', $rec->id) }}">
                                                        <button type="button"
                                                            class="mr-2 inline-flex items-center rounded-lg border border-blue-600 bg-blue-600 p-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                            <div class="mr-2">
                                                                <i class="fa-solid fa-edit"></i>
                                                            </div>
                                                            Editar
                                                        </button>
                                                    </a>
    
                                                    <a href="{{ route('deleteRec', $rec->id) }}">
                                                        <button type="button" onclick="confirmExclusao(event)"
                                                            class="mr-2 inline-flex items-center rounded-lg border border-red-600 bg-red-500 p-2.5 text-center text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-200">
                                                            <div class="mr-2">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                            Excluir
                                                        </button>
                                                    </a>
                                                </div>
    
                                            </div>
    
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-app-layout>
