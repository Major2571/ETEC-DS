<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Quem Somos</title>
    
</head>
<body>

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

</body>
</html>