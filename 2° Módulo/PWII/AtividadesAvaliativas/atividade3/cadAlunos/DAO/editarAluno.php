<?php

    $alterarID = $_POST['txAlterarID'];
    $alterarNome = $_POST['txAlterarNome'];
    $alterarRM = $_POST['txAlterarRM'];
    $alterarDataNasc = $_POST['txAlterarDataNasc'];
    $alterarCpf = $_POST['txAlterarCpf'];
    $alterarCurso = $_POST['txAlterarCurso'];
    $alterarModulos = $_POST['txAlterarModulos'];
    $alterarTurnos = $_POST['txAlterarTurnos'];
    $alterarEndereco = $_POST['txAlterarEndereco'];
    $alterarCEP = $_POST['txAlterarCEP'];
    $alterarBairro = $_POST['txAlterarBairro'];
    $alterarNumero = $_POST['txAlterarNumero'];
    $alterarComplemento = $_POST['txAlterarComplemento'];
    $alterarNomeResp = $_POST['txAlterarNomeResp'];
    $alterarCpfResp = $_POST['txAlterarCpfResp'];
    $alterarDataNascResp = $_POST['txAlterarDataNascResp'];



    include("conexaoBD.php");

        try {

            $stmt = $pdo->prepare("UPDATE tbAlunos SET matricula = '$alterarRM', aluno = '$alterarNome', dataNasc = '$alterarDataNasc', cpf = '$alterarCpf', curso = '$alterarCurso', modulo = '$alterarModulos', turno = '$alterarTurnos', endereco = '$alterarEndereco', cep = '$alterarCEP', bairro = '$alterarBairro', numero = '$alterarNumero', complemento = '$alterarComplemento', nomeResp = '$alterarNomeResp', cpfResp = '$alterarCpfResp', dataNascResp = '$alterarDataNascResp' WHERE `idAluno` = '$alterarID';");

            $stmt->execute();

            $pdo = null;

            header("Location: ../informacoesAluno.php?idAluno=$alterarID");
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }


?>