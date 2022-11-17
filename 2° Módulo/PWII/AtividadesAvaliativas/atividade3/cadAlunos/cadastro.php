<?php include('templates/head.php'); ?>

<section class="search">
    <h1>Cadastre um Aluno: </h1>

    <form class="box-search" action="DAO/cadAlunos.php" method="post">

        <div class="box-item">
            <input type="number" name="rm" placeholder="RM" require="">
        </div>

        <div class="box-item">
            <input type="text" placeholder="Nome do Aluno" name="nome" require>
        </div>



        <div class="box-item">
            <input type="number" name="cpf" placeholder="CPF" require>
        </div>

        <div class="box-item">
            <label> Data de Nascimento </label>
            <input type="date" placeholder="Data" name="data" require>
        </div>


        <div class="select">
            <div class="box-item-sel">
                <select name="curso" require>
                    <option value=""> Curso </option>
                    <option value="Nutrição">Nutrição</option>
                    <option value="Finanças">Finanças</option>
                    <option value="Administração">Administração</option>
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                </select>
            </div>

            <div class="box-item-sel">
                <select name="modulos" require>
                    <option value=""> Modulo </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="box-item-sel">
                <select name="turnos" require>
                    <option value=""> Turno </option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
        </div>
        <div class="enviar">
            <input type="submit">
        </div>
    </form>
</section>

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
                <th>Excluir</th>
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
                                <td> <a href='DAO/excluirAluno.php?id= $row[0]'><img src='img/trash.svg'> </a> </td>
                            </tr>";
                    }

                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

            ?>

        </tbody>
    </table>
</section>


<?php include('templates/footer.php'); ?>