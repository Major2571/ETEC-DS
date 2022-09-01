<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Aula 01 PHP </title>

</head>

<body>

    <h1> Olá Mundo! </h1>


    <?php
        // é case-sensitive
        // PHP responsável por "ligar" a gente com o servidor 
        // nós ---- php ---- servidor

        // echo - famoso "escreva" do portugol
        echo "Olá Mundo!";

        echo " <h2> Variáveis </h2> ";

        // variáveis - começam sempre com $; 
        //não são tipadas, ou seja, não precisa definir o tipo da variável ( inteiro, real, string )
        $nome = "Carol" ;
        $nome2 = "Maria" ;
        $idade = 20;
        $peso = 75.5 ;

        echo $nome;
        echo "<br />" . $nome2;
        echo "<br />" . $idade;
        echo "<br />" . $peso;
        echo "<br />";  // <br /> quebra de linha em php

        // concatenação no php = .
        echo "<br /> Nome:" . $nome . "<br />";

        //ou 
        echo "Nome: $nome2 <br /> Idade: $idade <br /> Peso: $peso ";

        echo '<br /> Texto ' . $nome2;



        echo "<br /> <h2> Operadores aritméticos </h2>";

        // Processsamento
        $n1 = 3;
        $n2 = 7;
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $resto = $n1 % $n2;

        // Saída
        echo " $n1 + $n2 = $soma <br /> ";
        echo " $n1 - $n2 = $sub <br /> ";
        echo " $n1 * $n2 = $mult <br /> ";
        echo " $n1 / $n2 = $div <br /> ";
        echo " Resto da divisão de $n1 por $n2 = $resto <br />";

    ?>



</body>

</html>