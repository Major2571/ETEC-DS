<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Reclamacoes</title>
</head>
<body>

    <section class="table">
        <table>
    
            <thead>
                <tr>
                    <th>idRec</th>
                    <th>idLab</th>
                    <th>PC</th>
                    <th>Título</th>
                    <th>Descrição</th>
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
    
</body>
</html>