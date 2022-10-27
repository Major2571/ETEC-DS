<?php require("templetes/head.php"); ?>

<section>
    <h1> Contact </h1>
</section>

<section class="formulario">

    <form action="dadosProduto.php" method="post">

        <div>
            <input type="text" placeholder="Produto" name="txProduto">
        </div>

        <div>
            <input type="text" placeholder="Valor" name="txValor">
        </div>

        <div>
            <input type="text" placeholder="Categoria" name="txCategoria">
        </div>

        
        <div>
            <input type="submit" value="Cadastrar" />
        </div>

    </form>

</section>

<?php require("templetes/footer.php"); ?>