@extends('templates.head')

<title>Laboratorios</title>

@section('content')

<section class="table">
    <table>
        <thead>
            <tr>
                <th>IdLab</th>
                <th>Laboratorio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lab AS $dadosLab)
            <tr>
                <td>{{$dadosLab -> idLab}}</td>
                <td>{{$dadosLab -> Laboratorio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection