
<?php

include("conexaoBD.php");

    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $cursos = $_POST['curso'];
    $modulo = $_POST['modulos'];
    $turno = $_POST['turnos'];

    try {

        $stmt = $pdo->prepare("insert into tbAlunos values(null, '$rm', '$nome', '$data', '$cpf', '$cursos', '$modulo', '$turno');");

        $stmt->execute();

        $pdo = null;

        header("Location: ../cadastro.php");

    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


?>