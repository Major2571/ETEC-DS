<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Contato</title>
</head>
<body>

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
    
</body>
</html>