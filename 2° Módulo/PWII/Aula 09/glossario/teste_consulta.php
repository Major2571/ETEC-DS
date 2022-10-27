<?php

    include("conexaoBD.php");

    $stmt = $pdo -> prepare('select * from tbpalavra');
    $stmt -> execute();

    while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
        echo $row[0];
    }

?>