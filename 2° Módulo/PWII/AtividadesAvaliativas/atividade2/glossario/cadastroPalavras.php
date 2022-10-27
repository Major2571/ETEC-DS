<?php require("templates/head.php"); ?>

<?php 

    $palavra = $_POST['txPalavra'];
    $desc = $_POST['txDescricao'];
    $img = $_POST['Img'];
    $link = $_POST['txLink'];


    echo " <div class='dados'>
            <h1> Dados Cadastrados! </h1> 
            </div> 
            <div class='var'>
                <p>
                       <strong> Palavra: </strong> $palavra
                <br /> <strong> Descrição: </strong> $desc
                <br /> <strong> Link: </strong> $link
                <br /> <strong> Imagem: </strong> <img src='$img' alt=''>
                </p>
            </div> ";
    
?>


<?php require("templates/footer.php"); ?>