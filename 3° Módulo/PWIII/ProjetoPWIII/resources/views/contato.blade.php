@extends('templates.head')

<title>Contato</title>

@section('content')


<section class="form">
    <form action="/contato" method="post">
        {{csrf_field()}}

        <div class="input-box">
            <input type="text" name="txNome" placeholder="Nome" />
        </div>

        <div class="input-box">
            <input type="text" name="txEmail" placeholder="Email" />
        </div>

        <div class="input-box">
            <input type="text" name="txAssunto" placeholder="Assunto" />
        </div>

        <div class="input-box">
            <input type="text" name="txMensagem" placeholder="Mensagem" />
        </div>

        <input type="submit" value="Salvar" />
    </form>
</section>

<section class="table">
    <table>

        <thead>
            <tr>
                <th>IdContato</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Assunto</th>
                <th>Mensagem</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $contato AS $contacts )
            <tr>
                <td>{{$contacts -> idContato}}</td>
                <td>{{$contacts -> nome}}</td>
                <td>{{$contacts -> email}}</td>
                <td>{{$contacts -> assunto}}</td>
                <td>{{$contacts -> mensagem}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</section>

@endsection