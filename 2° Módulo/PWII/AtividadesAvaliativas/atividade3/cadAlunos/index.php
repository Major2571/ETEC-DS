<?php include('templates/head.php');
include('templates/barraBusca.php'); ?>


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

                try {
                    $stmt = $pdo->prepare("select * from tbAlunos order by aluno;");
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
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

            ?>

        </tbody>
    </table>
</section>










<?php include('templates/footer.php')?>