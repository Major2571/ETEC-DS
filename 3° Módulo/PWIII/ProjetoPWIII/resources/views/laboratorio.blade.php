@extends('templates.head')

<title>Laboratorios</title>

@section('content')

<section class="form">

    <div class='titles'>
        <h1>Adicione Novos Laboratórios</h1>
    </div>

    <form action="/laboratorio" method="post">

    {{csrf_field()}}

        <div class="input-box">
            <input type="text" name="txLab" placeholder="Numero Laboratorio" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

</section>

<section class="table table-lab">
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
                <td>{{$dadosLab -> id}}</td>
                <td>{{$dadosLab -> laboratorio}}</td>
                <td class='delete'>
                    <a href="/laboratorio/excluir/{{$dadosLab -> id}}">
                        <i class="deleteIcon material-icons">delete_outline</i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection