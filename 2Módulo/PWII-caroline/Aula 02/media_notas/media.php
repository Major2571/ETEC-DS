<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/media.css">
    <title>Média</title>
</head>
<body>
    

    <?php

            $n1 = 5 ;
            $n2 = 4 ;
            $n3 = 10 ;
            $n4 = 10 ;

            $media = ( $n1 + $n2 + $n3 + $n4 ) / 4;

            if ( $media >= 6 ) {
                echo "<h1> Aprovado </h1>";
            }
            else {
                echo "<h1 class='rep'> Reprovado </h1>";
            }

            

    ?>


</body>
</html>