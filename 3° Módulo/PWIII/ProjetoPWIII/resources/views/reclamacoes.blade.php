@extends('templates.head')

<title>Reclamações</title>

@section('content')

<section class="table">
    <table>

        <thead>
            <tr>
                <th>idRec</th>
                <th>idLab</th>
                <th>PC</th>
                <th>Título</th>
                <th class='th-texts'>Descrição</th>
                <th>Data de Criação</th>
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
            </tr>
            @endforeach
        </tbody>

    </table>
</section>

@endsection