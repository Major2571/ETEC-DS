<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Cadastre um novo Laboratório</h1>
            <p class="text-lg text-gray-300 mt-4">Preencha o formulário abaixo para cadastrar um novo laboratório.
                Lembre-se de seguir o padrão 'Lab00' ( 'Lab' + N° do Laboratório )</p>
        </div>
    </x-slot>

    <section class="cad-form my-10">
        <div class="w-full flex flex-wrap justify-center items-center content-center main-top">
            <div class="lg:w-1/4 md:w-2/5">
                <form method="POST" action="{{ route('register') }}" id="cadastroForm"
                class="bg-slate-100 shadow-md rounded px-8 py-10 mb-4 w-full m-auto">
                    @csrf

                    <!-- Name -->

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="name"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="name"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nome
                        </label>
                    </div>
                    
                    <!-- Email Address -->
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="email" id="email"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email
                        </label>
                    </div>
                    
                    <!-- Password -->
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="password" id="password"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="password"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Senha
                        </label>
                    </div>
                    
                    
                    <!-- Confirm Password -->
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="password_confirmation" id="password_confirmation"
                            class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                            placeholder=" " required />
                        <label for="password_confirmation"
                            class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Confirme sua Senha
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
