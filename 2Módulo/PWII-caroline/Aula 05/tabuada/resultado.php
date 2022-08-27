<?php

    $n = $_POST['txNumero'];
    $i = 0;

    while($i <= 10){
        echo " $n * $i = " .($n * $i) . "<br />";
        $i++;
    }


?>