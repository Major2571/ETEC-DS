<?php require("templetes/head.php"); ?>


<?php 

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];
    $genero = $_POST['rGenero'];

    echo " <div class='dados'>
            <h1> Dados enviados! </h1> 
            </div> 

            <div class='var'>
                <h2> Dados do Formulário: </h2>
                <p>
                       <strong> Nome: </strong> $nome 
                <br /> <strong> Gênero: </strong> $genero
                <br /> <strong> E-mail: </strong> $email
                <br /> <strong> Assunto: </strong> $assunto
                <br /> <strong> Mensagem : </strong> $mensagem
                </p>
            </div> ";
    

?>


<?php require("templetes/footer.php"); ?>
