@extends('templates.head')

<title>Index</title>

@section('content')

<section class="form">

    <div class='titles'>
        <h1>Contact Us</h1>
    </div>

    <form action="/quem-somos" method="post">

        @csrf

        <div class="input-box">
            <input type="text" name="txNome" placeholder="Nome" />
        </div>

        <div class="input-box">
            <input type="text" name="txSobrenome" placeholder="Sobrenome" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

</section>

<section class="table">
    <table>
        <thead>
            <tr>
                <th>IdQuemSomos</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quemSomos AS $qmSomos)
            <tr>
                <td>{{$qmSomos -> idQuemSomos}}</td>
                <td>{{$qmSomos -> nome}}</td>
                <td>{{$qmSomos -> sobrenome}}</td>
                <td>
                    <a href="/quem-somos/excluir/{{$qmSomos -> idQuemSomos}}">
                    <img src="{{ url('https://cdn-icons-png.flaticon.com/512/3096/3096673.png') }}" alt="delete-icon">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection