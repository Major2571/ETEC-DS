<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <table>

    <thead>
        <th colspan="2" > Tabela </th>
    </thead>
        <tr>
            <th>Produtos </th>
            <th>Valores</th>
        </tr>

        <?php
            $valor = 20;
            while ($valor <= 250 )
            {
            echo "<tr>\n  <td>". $valor. "</td>\n";
            
            echo "  <td>". $valor / 10 ."</td>\n</tr>\n";
            $valor += 50;
            }

?>


        


    </table>
</body>
</html>