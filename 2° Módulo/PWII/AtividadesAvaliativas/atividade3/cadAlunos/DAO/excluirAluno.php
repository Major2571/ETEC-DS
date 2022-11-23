<?php

    $idAluno = $_GET['id'];


    include("conexaoBD.php");
        try {

            $stmt = $pdo->prepare("delete from tbAlunos where idAluno = '$idAluno';");

            $stmt->execute();

            $pdo = null;

            header("Location: ../cadastro.php");
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }


?>