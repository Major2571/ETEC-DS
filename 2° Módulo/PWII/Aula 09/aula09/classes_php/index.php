<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

    <title>Aula 09</title>

</head>
<body>

    
    <?php

        include("palavraClasse.php");

        $p = new Palavra();
        
        $p -> palavra = "teclado";
        
        echo  $p -> palavra;
    
    ?>


</body>
</html>