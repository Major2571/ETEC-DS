
<?php

include("conexaoBD.php");

    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $cursos = $_POST['curso'];
    $modulo = $_POST['modulos'];
    $turno = $_POST['turnos'];
    $endereco = $_POST['rua'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $numeroCasa = $_POST['numeroCasa'];
    $complemento = $_POST['complemento'];
    $nomeResp = $_POST['nomeResp'];
    $cpfResp = $_POST['cpfResp'];
    $dataResp = $_POST['dataResp'];



    try {

        $stmt = $pdo->prepare("insert into tbAlunos values(null, '$rm', '$nome', '$data', '$cpf', '$cursos', '$modulo', '$turno', '$endereco', '$cep','$bairro','$numeroCasa','$complemento','$nomeResp','$cpfResp','$dataResp');");

        $stmt->execute();

        $pdo = null;

        header("Location: ../cadastro.php");

    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


?>