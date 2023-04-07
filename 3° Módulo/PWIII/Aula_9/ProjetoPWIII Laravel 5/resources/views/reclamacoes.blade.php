@extends('templates.head')

<title>Reclamações</title>

@section('content')

<section class="form">

    <div class='titles'>
        <h1> Novas Reclamações</h1>
    </div>

    <form action="/reclamacoes" method="post">

        {{csrf_field()}}

        <div class="input-box">
            <input type="text" name="txLab" placeholder="Laboratorio" />
        </div>

        <div class="input-box">
            <input type="text" name="txPc" placeholder="Computador" />
        </div>

        <div class="input-box">
            <input type="text" name="txTitulo" placeholder="Titulos" />
        </div>

        <div class="input-box">
            <input type="text" name="txDescricao" placeholder="Descricao" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

</section>

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
                <td>{{$rec -> dtCriacao}}</td>
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