<x-app-layout>
    <section class="cad-form my-10">
        <div class="w-full flex flex-wrap justify-center items-center content-center main-top">
            <div class="lg:w-1/4 md:w-4/5 sm:w-full bg-slate-100 shadow-lg rounded-md px-9 py-10">
                <form method="post" action="{{ route( 'updateRec', $reclamacoes->id ) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid md:grid-cols-2 md:gap-6">

                        <div class="relative z-0 w-full mb-6 group">
                            <select id="txLab" name="txLab" disabled
                                class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-300 focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer disabled:text-slate-500">
                                <option value="">N° Laboratório</option>

                                @foreach ($lab as $dadosLab)
                                    <option value="{{ $dadosLab->id }}"
                                        {{ $dadosLab->id == $reclamacoes->idLab ? 'selected' : '' }}>
                                        {{ $dadosLab->laboratorio }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="txPc" id="txPc" value="{{ $reclamacoes->pc }}"
                                class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer disabled:text-slate-500"
                                placeholder=" " required disabled/>
                            <label for="txPc"
                                class="peer-focus:font-medium absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Computador
                            </label>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="txTitulo" id="txTitulo" value="{{ $reclamacoes->titulo }}"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer disabled:text-slate-500"
                            placeholder=" " required  disabled/>
                        <label for="txTitulo"
                            class="peer-focus:font-medium absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Título
                        </label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <textarea type="text" name="txDescricao" id="txDescricao"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer disabled:text-slate-500"
                            placeholder=" " required disabled> {{ $reclamacoes->descricao }} </textarea>
                        <label for="txDescricao"
                            class="peer-focus:font-medium absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Descrição
                        </label>
                    </div>


                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="dtCriacao" id="dtCriacao" value="{{ $reclamacoes->dtCriacao }}"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer disabled:text-slate-500"
                            placeholder=" " required disabled/>
                        <label for="dtCriacao"
                            class="peer-focus:font-medium absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Data e Hora de criação
                        </label>
                    </div>


                    <div class="relative z-0 w-full mb-6 group">
                        <select name="status"
                            class="block py-2.5 px-0 w-full text-gray-700 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-300 focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer">
                            <option value="">Status</option>
                            <option value="Pendente" {{ $reclamacoes->status == 'Pendente' ? 'selected' : '' }}>
                                <i class="fa-solid fa-circle"></i>
                                Pendente
                            </option>
                            <option value="Em andamento" {{ $reclamacoes->status == 'Em andamento' ? 'selected' : '' }}>
                                Em andamento
                            </option>
                            <option value="Concluído" {{ $reclamacoes->status == 'Concluído' ? 'selected' : '' }}>
                                Concluído
                            </option>
                        </select>
                    </div>

                    <div class="flex items-center content-center flex-wrap m-auto justify-center">
                        <input type="submit" value="Enviar"
                            class="text-white bg-[#DE3F4D] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md w-full sm:w-auto px-8 py-2 text-center mt-5 cursor-pointer" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
