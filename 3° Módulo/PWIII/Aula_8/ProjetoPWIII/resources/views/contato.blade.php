@extends('templates.head')

<title>Contato</title>

@section('content')


<section class="form">

    <div class='titles'>
        <h1>Contact Us</h1>
    </div>

    <form action="/contato" method="post">

        @csrf

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
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Apagar</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $contato AS $contacts )
            <tr>
                <td>{{$contacts -> nome}}</td>
                <td>{{$contacts -> email}}</td>
                <td>{{$contacts -> assunto}}</td>
                <td>{{$contacts -> mensagem}}</td>
                <td>
                    <a href="/contato/excluir/{{$contacts -> idContato}}">
                    <img src="{{ url('https://cdn-icons-png.flaticon.com/512/3096/3096673.png') }}" alt="delete-icon">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</section>

@endsection