@extends('templates.head')

<title>Index</title>

@section('content')

<section class="form">

    <div class='titles'>
        <h1>Adicione Novos Membros</h1>
    </div>

    <form action="/quem-somos" method="post">

        {{csrf_field()}}

        <div class="input-box">
            <input type="text" name="txNome" placeholder="Nome" />
        </div>

        <div class="input-box">
            <input type="text" name="txSobrenome" placeholder="Sobrenome" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

</section>

<section class="table table-lab">
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
</section>

@endsection