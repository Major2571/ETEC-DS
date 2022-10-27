<?php require("templates/head.php"); ?>

<?php 

    $produto = $_POST['txProduto'];
    $valor = $_POST['txValor'];
    $categoria = $_POST['txCategoria'];


    echo " <div class='dados'>
            <h1> Dados enviados! </h1> 
            </div> 

            <div class='var'>
                <h2> Dados do Formulário: </h2>
                <p>
                       <strong> Produto: </strong> $produto 
                <br /> <strong> Valor: R$ </strong> $valor
                <br /> <strong> Categoria: </strong> $categoria
                </p>
            </div> ";
    

?>


<?php require("templates/footer.php"); ?>
