<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::findall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de festas</title>
</head>
<body>
<table>
        <tr>
            <td>Nome</td>
            <td>Endereço</td>
            <td>Cidade</td>
            <td>Data</td>
        </tr>
        <?php
        foreach ($festas as $festa) {
            echo '<tr>';
            echo '<td>'.$festa->getNome().'</td>'."\t";
            echo '<td>'.$festa->getEndereco().'</td>'."\t";
            echo '<td>'.$festa->getCidade().'</td>'."\t";
            echo '<td>'.$festa->getDia().'</td>'."\t";
            echo '<td><a href="formedit.php?id='.$festa->getIdFesta().'">Editar</a></td>';
            echo "<td><a href='delete.php?id={$festa->getIdFesta()}'>Excluir</a></td>";
            echo '</tr>';
        }
        ?>
    </table>
    <a href="formFesta.php">Adicionar uma festa</a>
</body>
</html>