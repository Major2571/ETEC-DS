<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Laboratorio</title>
    
</head>
<body>

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

</body>
</html>