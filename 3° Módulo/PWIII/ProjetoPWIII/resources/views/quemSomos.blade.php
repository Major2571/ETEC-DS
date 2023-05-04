@extends('templates.head')

<title>Index</title>

@section('content')

<section class="form">

<div class="flex flex-wrap justify-center items-center content-center main-top">
    <div class="w-1/5">
        <form action="/quem-somos" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full m-auto">
    
            @csrf
    
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="txNome" 
                    id="txNome" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label 
                    for="txNome" 
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >
                    Nome
                </label>
            </div>
    
            <div class="relative z-0 w-full mb-6 group">
                <input 
                    type="text" 
                    name="txSobrenome" 
                    id="txSobrenome" 
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " 
                    required 
                />
                <label 
                    for="txSobrenome" 
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >
                    Sobrenome
                </label>
            </div>
            <!-- 
            <div class="input-box">
                <input type="text" name="txNome" placeholder="Nome" />
            </div>
    
            <div class="input-box">
                <input type="text" name="txSobrenome" placeholder="Sobrenome" />
            </div> -->
    
            <div class="flex items-center content-center flex-wrap m-auto justify-center cursor-pointer">
                <input type="submit" value="Salvar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/>
            </div>
    
        </form>
    </div>

    <div class="px-8 pt-6 pb-8 mb-4 w-1/4">
        <h1 class="mt-2 block mt-1 text-3xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">
            Reclamações
        </h1>
      <p class="block mt-1 leading-tight text-xl text-gray-400 drop-shadow-lg">
            No CamargoLabs, levamos a sério qualquer problema que possa afetar sua experiência no laboratório de informática. Se você encontrou algum problema, como um computador com defeito, um teclado com problemas, ou qualquer outra coisa que esteja impedindo você de estudar, queremos saber. 
            </br>
            Use o formulário ao lado para nos informar sobre o problema. Nossa equipe de suporte técnico entrará em contato o mais rápido possível para resolver o problema e garantir que você possa se concentrar em seus estudos novamente.
            </br>
            Agradecemos por nos ajudar a melhorar o ambiente acadêmico!
        </p>
    </div>
</div>

</section>

<!-- <section class="table table-lab">
    <table>
        <thead>
            <tr>
                <th>IdQuemSomos</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th class='delete'>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quemSomos AS $qmSomos)
            <tr>
                <td>{{$qmSomos -> idQuemSomos}}</td>
                <td>{{$qmSomos -> nome}}</td>
                <td>{{$qmSomos -> sobrenome}}</td>
                <td class='delete'>
                    <a href="/quem-somos/excluir/{{$qmSomos -> idQuemSomos}}">
                    <i class="deleteIcon material-icons">delete_outline</i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section> -->

@endsection