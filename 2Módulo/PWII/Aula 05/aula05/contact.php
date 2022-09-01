<?php require("templetes/head.php"); ?>

<section>
    <h1> Contact </h1>
</section>

<section class="formulario">

    <form action="dadosContato.php" method="post">

        <div>
            <input type="text" placeholder="Nome" name="txNome">
        </div>

        <div class="genero">
            <input type="radio" name="rGenero" value="Masculino"> Masculino
            <input type="radio" name="rGenero" value="Feminino"> Feminino
            <input type="radio" name="rGenero" value="Outro"> Outro
        </div>

        <div>
            <input type="email" placeholder="E-mail" name="txEmail">
        </div>

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto">
        </div>

        <div>
            <textarea cols="30" rows="10" placeholder="Sua Mensagem" name="txMensagem"></textarea>
        </div>

        <div>
            <input type="submit" value="Enviar" />
        </div>

    </form>

</section>

<?php require("templetes/footer.php"); ?>