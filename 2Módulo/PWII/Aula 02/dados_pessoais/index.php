<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style_dadosPessoais.css">
    <title>Dados Pessoais</title>
</head>
<body>

    <?php

        $nome = "Juarez";
        $idade = 28;
        $email = "juarez@gmail.com";

        echo "<div class='dados'>
                  <h1 class='nome'> $nome </h1>", // NÃO PRECISA DE CLASSE!!! USA O CHILD!
                 "<h1 class='idade'> $idade </h1>",
                 "<h1 class='email'> $email </h1> 
              </div>";

    ?>
    
</body>
</html>