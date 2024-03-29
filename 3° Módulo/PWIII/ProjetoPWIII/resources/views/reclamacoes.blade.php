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
                    No CamargoLabs, levamos a sério qualquer problema que possa afetar sua experiência no laboratório de
                    informática.
                    </br>
                    Se você encontrou algum problema, como um computador com defeito, um teclado com problemas, ou qualquer
                    outra coisa que esteja impedindo você de estudar, queremos saber.
                    </br>
                    Use o formulário ao lado para nos informar sobre o problema. Nossa equipe de suporte técnico entrará em
                    contato o mais rápido possível para resolver o problema e garantir que você possa se concentrar em seus
                    estudos novamente.
                    </br>
                    Agradecemos por nos ajudar a melhorar o ambiente acadêmico!
                </p>
            </div>

            <div class="lg:w-1/4 md:w-1/2">
                <form action="/mande-uma-reclamacao" method="post"
                    class="bg-white shadow-lg rounded-md px-9 py-10 mb-2 w-full m-auto"
                    id="submitForm"
                    >

                    @csrf

                    <div class="grid md:grid-cols-2 md:gap-6">

                        <div class="relative z-0 w-full mb-6 group">

                            <label for="txLab" class="sr-only">Underline select</label>

                            <select id="txLab" name="txLab"
                                class="block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-300 focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer">

                                <option value="">N° Laboratório</option>

                                @foreach ($lab as $dadosLab)
                                    <option value="{{ $dadosLab->id }}">
                                        {{ $dadosLab->laboratorio }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="txPc" id="txPc"
                                class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                                placeholder=" " required />
                            <label for="txPc"
                                class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                N° Computador
                            </label>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="txTitulo" id="txTitulo"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="txTitulo"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Título
                        </label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <textarea type="text" name="txDescricao" id="txDescricao"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required></textarea>
                        <label for="txDescricao"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Descrição
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
@endsection
