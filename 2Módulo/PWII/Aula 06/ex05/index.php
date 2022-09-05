<?php include("templates/head.php"); ?>

<section>
    <h2> Exercício 5 </h2>
    <p> Utilizando vetores e laços de repetição, crie uma página que exiba a imagem referente a um país, seu nome e o seu continente.  </p>


    <?php



        $pais = array();
        $pais[0] = "Canadá";
        $pais[1] = "México";
        $pais[2] = "Brasil";
        $pais[3] = "Reino Unido";
        $pais[4] = "China";


        $continente = array();
        $continente[0] = "América do Norte";
        $continente[1] = "América Central";
        $continente[2] = "América do Sul";
        $continente[3] = "Europa";
        $continente[4] = "Ásia";

        echo "<table> 
                <thead>
                    <tr>
                        <th>País</th>
                        <th>Continente</th>
                    </tr>
                </thead>
                
                <tbody>";


                for ($i = 0; $i < count($pais); $i++) {
                        echo "<tr>
                                <td>$pais[$i]</td>  
                                <td>$continente[$i]</td>
                            </tr>";
                }

        echo "</tbody>
            </table>";



    ?>
    
</section>



<?php include("templates/footer.php"); ?>