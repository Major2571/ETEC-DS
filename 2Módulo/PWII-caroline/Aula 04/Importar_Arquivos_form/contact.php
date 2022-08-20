<?php require("templetes/head.php"); ?>

<section>
    <h1> Contact </h1>
</section>

<section class="formulario">

    <form action="">

        <div>
            <input type="text" placeholder="Nome" name="txNome">
        </div>

        <div>
            <input type="email" placeholder="E-mail" name="txEmail">
        </div>

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto">
        </div>

        <div>
            <textarea name="Mensagem" cols="30" rows="10" placeholder="Sua Mensagem"></textarea>
        </div>

        <div>
            <input type="submit" value="Enviar" />
        </div>

    </form>

</section>

<?php require("templetes/footer.php"); ?>