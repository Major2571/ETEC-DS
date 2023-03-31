@extends('templates.head')

<title>Laboratorios</title>

@section('content')

<section class="form">

    <div class='titles'>
        <h1>Contact Us</h1>
    </div>

    <form action="/laboratorio" method="post">

        @csrf

        <div class="input-box">
            <input type="text" name="txLab" placeholder="Numero Laboratorio" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

</section>

<section class="table">
    <table>
        <thead>
            <tr>
                <th>IdLab</th>
                <th>Laboratorio</th>
                <th class='delete'>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lab AS $dadosLab)
            <tr>
                <td>{{$dadosLab -> idLab}}</td>
                <td>{{$dadosLab -> Laboratorio}}</td>
                <td>
                    <a href="/laboratorio/excluir/{{$dadosLab -> idLab}}">
                    <img src="{{ url('https://cdn-icons-png.flaticon.com/512/3096/3096673.png') }}" alt="delete-icon">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection