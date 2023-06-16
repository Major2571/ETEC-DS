<x-app-layout>
    {{-- <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Cadastre um novo Laboratório</h1>
            <p class="text-lg text-gray-300 mt-4">Preencha o formulário abaixo para cadastrar um novo laboratório. Lembre-se de seguir o padrão 'Lab00' ( 'Lab' + N° do Laboratório )</p>
          </div>
    </x-slot> --}}


    <section class="cad-form my-10">
        <div class="w-full flex flex-wrap justify-center items-center content-center main-top">
            <div class="lg:w-1/4 md:w-2/5">

                <form action="{{ route( 'updateLab', $lab->id ) }}" method="post"
                    class="bg-slate-100 shadow-md rounded px-8 py-10 mb-4 w-full m-auto">
                    @csrf
                    @method('PUT')

                    <h1 class="text-2xl font-bold text-center text-gray-800 mb-10">
                         Cadaste um novo Laboratório
                    </h1>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="txLab" id="txLab"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer" value="{{ $lab->laboratorio }}"
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
</x-app-layout>