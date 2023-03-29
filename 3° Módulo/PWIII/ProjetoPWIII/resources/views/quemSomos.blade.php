@extends('templates.head')

<title>Index</title>

@section('content')

<section class="table">
    <table>
        <thead>
            <tr>
                <th>IdQuemSomos</th>
                <th>Nome</th>
                <th>Sobrenome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quemSomos AS $qmSomos)
            <tr>
                <td>{{$qmSomos -> idQuemSomos}}</td>
                <td>{{$qmSomos -> nome}}</td>
                <td>{{$qmSomos -> sobrenome}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection