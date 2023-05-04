@extends('templates.head')

<title>Reclamações</title>

@section('content')
<div class="w-full absolute top-[-22em] blob-maker blob-sec">
    <img src="assets/img/blob-maker.svg" />
</div>

<section class="form">

    <div class="flex flex-wrap justify-center items-center content-center main-top">
        <div class="w-1/4">
            <form action="/reclamacoes" method="post" class="bg-white shadow-md rounded px-9 py-10 mb-2 w-full m-auto">

                @csrf

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txLab" id="txLab" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="txLab" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        N° Laboratorio
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txPc" id="txPc" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="txPc" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        N° Computador
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txTitulo" id="txTitulo" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="txTitulo" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Título
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <textarea type="text" name="txDescricao" id="txDescricao" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                    <label for="txDescricao" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Descrição
                    </label>
                </div>


                <div class="flex items-center content-center flex-wrap m-auto justify-center cursor-pointer ">
                    <input type="submit" value="Enviar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-8 py-2 text-center mt-5" />
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

<!-- <h1>  Total de Reclamacoes Encontradas: {{App\Http\Controllers\ReclamacoesController::totalDeReclamacoes()}} </h1>

<div class="search-container">
    <p> Busque um Laboratorio: </p>
    <form action="/reclamacoes" method="get">

        <input  type="number" name="searchNumber" class="form-control">

        <input type="date" name="searchDate" class="form-control">
        <input type="submit" value="Pesquisar">

    </form>

    @if($searchNumber)
        <p> Reclamações do Laboratorio: {{ $searchNumber }} </p>
    @endif

</div> -->

<section class="table">


    <table>
        <thead>
            <tr>
                <th>idRec</th>
                <th>idLab</th>
                <th>PC</th>
                <th>Título</th>
                <th class='th-texts'>Descrição</th>
                <th>Data/Hora de Criação</th>
                <th class='delete'>Apagar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($reclamacoes AS $rec)
            <tr>
                <td>{{$rec -> idRec}}</td>
                <td>{{$rec -> idLab}}</td>
                <td>{{$rec -> pc}}</td>
                <td>{{$rec -> titulo}}</td>
                <td>{{$rec -> descricao}}</td>
                <td>{{date('d/m/y', strtotime($rec -> dtCriacao))}}</td>

                <td class='delete'>
                    <a href="/reclamacoes/excluir/{{$rec -> idRec}}">
                        <i class="deleteIcon material-icons">delete_outline</i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</section>

@endsection