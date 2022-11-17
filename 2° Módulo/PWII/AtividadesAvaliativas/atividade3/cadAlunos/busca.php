<?php 
    include('templates/head.php');
    include('templates/barraBusca.php'); 
?>

<section class="consultaAlunos">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Matricula</th>
                <th>Aluno</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Curso</th>
                <th>Módulo</th>
                <th>Turno</th>
            </tr>
        </thead>

        <tbody>
            <?php

                include("DAO/conexaoBD.php");

                if (!isset($_POST['nome'])) {
                    header("Location: index.php");
                    exit;
                }

                $nome = $_POST['nome'];
                $data = $_POST['data'];
                $turno = $_POST['turnos'];
                $modulo = $_POST['modulos'];
                $cursos = $_POST['curso'];
                $rm = $_POST['rm'];
                $cpf = $_POST['cpf'];


                $stmt = $pdo->prepare("select * from tbAlunos where 
                                                        matricula like '%$rm%' 
                                                        AND aluno like '%$nome%'
                                                        AND dataNasc like '%$data%'
                                                        AND cpf like '%$cpf%'
                                                        AND curso like '%$cursos%'
                                                        AND modulo like '%$modulo%'
                                                        AND turno like '%$turno%';");
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                    echo "<tr> 
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                            <td>$row[6]</td>
                            <td>$row[7]</td>
                         </tr>";
                }

            ?>

        </tbody>
    </table>
</section>


<?php include("templates/footer.php"); ?>