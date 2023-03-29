@extends('templates.head')

<title>Contato</title>

@section('content')

<section class="table">
    <table>

        <thead>
            <tr>
                <th>IdContato</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-Mail</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $contato AS $contacts )
            <tr>
                <td>{{$contacts -> idContato}}</td>
                <td>{{$contacts -> nome}}</td>
                <td>{{$contacts -> telefone}}</td>
                <td>{{$contacts -> email}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</section>

@endsection