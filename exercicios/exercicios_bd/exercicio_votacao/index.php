<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacao</title>
</head>
<body>
    <table>
        <tr>
            <td>Time</td>
            <td>Votos</td>
        </tr>
            <?php
            $votos = Voto::findall();
            foreach($votos as $voto) {
                echo '<tr>';
                echo "<td>{$voto}";

            }
            ?>
    </table>
</body>
</html>