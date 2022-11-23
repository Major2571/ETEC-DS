<?php include('templates/head.php'); ?>

<section>
    <div class="top">
        <h1>Editar Informações do Aluno: </h1>
    </div>
    <h3> <?php echo @$_GET['alterarNome'] ?> </h3>

    <form action="DAO/editarAluno.php" method="post">

        <div>
            <input type="hidden" placeholder="ID" name="txAlterarID" value="<?php echo @$_GET['alterarId'] ?>">
        </div>

        <div class="box-editar">
            <h3> Nome do Aluno: </h3>
            <input type="text" placeholder="Nome Completo" name="txAlterarNome" value="<?php echo @$_GET['alterarNome'] ?>">
        </div>

        <div class="box-editar">
            <h3> RM: </h3>
            <input type="text" placeholder="RM" name="txAlterarRM" value="<?php echo @$_GET['alterarRM'] ?>">
        </div>


        <div class="box-editar">
            <h3> Data de Nascimento: </h3>
            <input type="date" name="txAlterarDataNasc" value="<?php echo @$_GET['alterarDataNasc'] ?>">
        </div>

        <div class="box-editar">
            <h3> CPF: </h3>
            <input type="number" name="txAlterarCpf" value="<?php echo @$_GET['alterarCPF'] ?>">
        </div>


        <div class="select">
            <div class="box-item-sel">
                <select name="txAlterarCurso" >
                    <option value="<?php echo @$_GET['alterarCurso'] ?>"> Curso </option>
                    <option value="Nutrição">Nutrição</option>
                    <option value="Finanças">Finanças</option>
                    <option value="Administração">Administração</option>
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                </select>
            </div>

            <div class="box-item-sel">
                <select name="txAlterarModulos">
                    <option value="<?php echo @$_GET['alterarModulo'] ?>"> Modulo </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="box-item-sel">
                <select name="txAlterarTurnos" >
                    <option value="<?php echo @$_GET['alterarTurno'] ?>"> Turno </option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
        </div>

        <div class="box-editar">
            <h3> Endereço: </h3>
            <input type="text" name="txAlterarEndereco" value="<?php echo @$_GET['alterarEndereço'] ?>">
        </div>

        <div class="box-editar">
            <h3> CEP: </h3>
            <input type="number" name="txAlterarCEP" value="<?php echo @$_GET['alterarCEP'] ?>">
        </div>

        <div class="box-editar">
            <h3> Bairro: </h3>
            <input type="text" name="txAlterarBairro" value="<?php echo @$_GET['alterarBairro'] ?>">
        </div>

        <div class="box-editar">
            <h3> Número: </h3>
            <input type="text" name="txAlterarNumero" value="<?php echo @$_GET['alterarNum'] ?>">
        </div>

        <div class="box-editar">
            <h3> Complemento : </h3>
            <input type="text" name="txAlterarComplemento" value="<?php echo @$_GET['alterarComplemento'] ?>">
        </div>

        <div class="box-editar">
            <h3> Nome do Responsável: </h3>
            <input type="text" name="txAlterarNomeResp" value="<?php echo @$_GET['alterarNomeResp'] ?>">
        </div>


        <div class="box-editar">
            <h3> CPF do Responsável: </h3>
            <input type="text" name="txAlterarCpfResp" value="<?php echo @$_GET['alterarCpfResp'] ?>">
        </div>

        <div class="box-editar">
            <h3> Data Nascimento Responsável: </h3>
            <input type="text" name="txAlterarDataNascResp" value="<?php echo @$_GET['alterarDataNascResp'] ?>">
        </div>


        <div>
            <input type="submit">
        </div>

    </form>

</section>


<?php include('templates/footer.php'); ?>