
<?php include("templetes/head.php"); ?> 

<?php

    $nome1 = "Caroline Tacats";
    $nome2 = "Kayo Lacerda";

    $idadeCarol = 18;
    $idadeKayo = 16;

    $emailCarol = "caroline.tacats62@gmail.com";
    $emailKayo = "martinslima2424@gmail.com";

    echo "
        <section>
            <h1> Quem Somos </h1>
            <div class='qm_somos'>
                <strong>Nome: </strong> $nome1 <br />
                <strong>E-mail:</strong> $emailCarol <br />
                <strong>Idade: </strong> $idadeCarol <br />
    ";

            if ($idadeCarol >= 18) {
                echo "<strong>Aluno maior de idade</strong> <br /></div>";
            } else {
                echo "<strong>Aluno menor de idade</strong> <br /></div>";
            }

            
    echo "
            <div class='qm_somos'>
                <strong>Nome: </strong> $nome2 <br />
                <strong>E-mail:</strong> $emailKayo <br />
                <strong>Idade: </strong> $idadeKayo <br />
            
    ";

            if ($idadeKayo >= 18) {
                echo "<strong>Aluno maior de idade</strong> <br /></div></section>";
            } else {
                echo "<strong>Aluno menor de idade</strong><br /></div></section>";
            }



?>

<?php include("templetes/footer.php"); ?>
