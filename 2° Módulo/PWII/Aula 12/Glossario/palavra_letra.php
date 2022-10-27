<?php include("templates/head.php"); ?>

<!-- <section class="palavra_letra">

    <figure>
        <img src="" alt="">
        <figcaption>
            <a href="#"> Palavra A1 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" alt="">
        <figcaption>
            <a href="#"> Palavra A2 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" alt="">
        <figcaption>
            <a href="#"> Palavra A3 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" alt="">
        <figcaption>
            <a href="#"> Palavra A4 </a>
        </figcaption>
    </figure>
    
    <figure>
        <img src="" alt="">
        <figcaption>
            <a href="#"> Palavra A5 </a>
        </figcaption>
    </figure>


</section> -->

<?php

    include("BD_Conexao.php");


    $letter = $_GET['letra'];

    echo "<h1> $letter </h1>";

    $stmt = $pdo->prepare("select * from tbPalavra where palavra like '$letter%'");
    $stmt->execute();


    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        
        echo " ";
        echo "$row[2] ";
        echo "$row[3] ";
        echo "$row[4] ";
        echo "<br />";
    }




?>

<div>
    <h2>$row[1]</h2>
    <p>$row[2]</p>
</div>
<?php include("templates/footer.php"); ?>