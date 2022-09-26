<?php include('templates/head.php'); ?>
<section>
    <?php

    $id = array();
    $id[0] = 1;
    $id[1] = 2;
    $id[2] = 3;
    $id[3] = 4;
    $id[4] = 5;

    $palavra = array();
    $palavra[0] = "Monitor";
    $palavra[1] = "Teclado";
    $palavra[2] = "Mouse";
    $palavra[3] = "Gabinete";
    $palavra[4] = "Fone";

    $descricao = array();
    $descricao[0] = "Desc Monitor";
    $descricao[1] = "Desc Teclado";
    $descricao[2] = "Desc Mouse";
    $descricao[3] = "Desc Gabinete";
    $descricao[4] = "Desc Fone";

    $img = array();
    $img[0] = "img/monitor.png";
    $img[1] = "img/teclado.png";
    $img[2] = "img/mouse.png";
    $img[3] = "img/gabinete.png";
    $img[4] = "img/fone.png";



    echo "<table> 
        <thead>
            <tr>
            <th>#</th>
            <th>Palavra</th>
            <th>Descrição</th>
            <th>Imagem</th>
            </tr>
        </thead>
        
        <tbody>";

    for ($i = 0; $i < count($id); $i++) {
        echo "<tr>
                <td>$id[$i]</td>  
                <td>$palavra[$i]</td>
                <td>$descricao[$i]</td>  
                <td><img src='$img[$i]'/></td>   
               </tr>";
    }


    echo "</tbody>
    </table>";



    ?>

</section>

<section class="palavra">
    <h1>Cadastre sua Palavra Abaixo:</h1>
        <form action="cadastroPalavras.php" method="post">

            <div>
                <input type="text" placeholder="Palavra"  name="txPalavra">
            </div>

            <div>
                <input type="text" placeholder="Descrição" name="txDescricao">
            </div>
            
            <div>
                <input type="text" placeholder="Imagem" name="txLink">
            </div>
            <div>
                <input type="text" placeholder="Link" name="txImg">
            </div>


            <div>
                <input type="submit" placeholder="Salvar" class="btn btn-info">
            </div>

        </form>

    </section>




<?php include("templates/footer.php"); ?>