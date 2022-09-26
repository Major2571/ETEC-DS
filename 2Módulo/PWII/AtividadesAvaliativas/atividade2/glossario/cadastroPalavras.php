<?php require("templates/head.php"); ?>

<?php 

    $palavra = $_POST['txPalavra'];
    $desc = $_POST['txDescricao'];
    $img = $_POST['txImg'];
    $link = $_POST['txLink'];


    echo " <div class='dados'>
            <h1> Dados Cadastrados! </h1> 
            </div> 
            <div class='var'>
                <p>
                       <strong> Palavra: </strong> $palavra
                <br /> <strong> Descrição: </strong> $desc
                <br /> <strong> Imagem: </strong> $link
                <br /> <strong> Link: </strong> $img
                </p>
            </div> ";
    
?>


<?php require("templates/footer.php"); ?>