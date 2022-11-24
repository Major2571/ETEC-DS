<?php include('templates/head.php'); ?>

<?php

    include("DAO/conexaoBD.php");

    $info = $_GET['idAluno'];

    $stmt = $pdo->prepare("select * from tbAlunos where idAluno = '$info' ;");
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

        echo  "<div class='aluno_infos'>
                <div>
                    <h1> Dados do Aluno </h1>
                    <h2> Nome:  $row[2]</h2>
                    <h2> RM : $row[1]</h2>
                    <h2> Data de Nascimento: $row[3]</h2>
                    <h2> CPF: $row[4]</h2>
                    <h2> Curso: $row[5]</h2>
                    <h2> Modulo: $row[6]</h2>
                    <h2> Turno: $row[7]</h2>
                </div>

                <div>
                    <h1> Residência </h1>
                    <h2> Endereço: $row[8]</h2>
                    <h2> CEP: $row[9]</h2>
                    <h2> Bairro: $row[10]</h2>
                    <h2> Número: $row[11]  </h2>
                ";

                if( $row[12]!=null ){
                    echo " <h2> Complemento: $row[12] </h2>";
                }

                echo "
                </div>
                <div>
                    <h1> Responsável </h1>
                    <h2> Nome: $row[13]</h2>
                    <h2> CPF: $row[14]</h2>
                    <h2> Data de Nascimento: $row[15]</h2>
                </div>
            
                </div>

                <div class='acoes'>
                    <button>
                        <a href='DAO/excluirAluno.php?id=$row[0]'><img src='img/trash.svg'> Excluir Aluno </a>
                    </button>

                    <button>
                        <a href='editarAlunoForm.php?alterarId=$row[0]" .
                        "&alterarNome=$row[2]" .
                        "&alterarRM=$row[1]" .
                        "&alterarDataNasc=$row[3]" .
                        "&alterarCPF=$row[4]" .
                        "&alterarCurso=$row[5]" .
                        "&alterarModulo=$row[6]" .
                        "&alterarTurno=$row[7]" .
                        "&alterarEndereço=$row[8]" .
                        "&alterarCEP=$row[9]" .
                        "&alterarBairro=$row[10]" .
                        "&alterarNum=$row[11]  " .
                        "&alterarNomeResp=$row[13]" .
                        "&alterarCpfResp=$row[14]" .
                        "&alterarDataNascResp=$row[15]" . "
                        &alterarComplemento=$row[12]'><img src='img/editar.png'> Editar Informações </a>
                    </button>
                </div>";

            
    }

?>





<?php include('templates/footer.php'); ?>