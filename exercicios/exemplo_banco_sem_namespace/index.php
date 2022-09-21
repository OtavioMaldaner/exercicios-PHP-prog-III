<?php
require_once __DIR__."/vendor/autoload.php";

// //Inserindo novo registro no banco
// $pessoa = new Pessoa("Primeira usuária","meuemail@email.com");
// $pessoa->save();

// // //Atualizando registro no banco
// $p = Pessoa::find(7);
// $p->setEmail("troquei-email@email.com");
// $p->save();

// $p2 = Pessoa::find(7);
// echo $p2->getNome();

// //Deletando um registro
// $p2->delete();
$contatos = Pessoa::findall();
// var_dump($contatos);
// foreach($contatos as $contato) {
//     echo $contato[0];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas kkkkkkkkkk</title>
</head>
<body>
    <table>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Opções</td>
        </tr>
        <?php
        foreach ($contatos as $contato) {
            echo '<tr>';
            echo '<td>'.$contato->getNome().'</td>'."\t";
            echo '<td>'.$contato->getEmail().'</td>'."\t";
            echo '<td><a href="formedit.php?id='.$contato->getId().'">Editar</a></td>';
            echo "<td><a href='delete.php?id={$contato->getId()}'>Excluir</a></td>";
            echo '</tr>';
        }
        ?>
    </table>
    <a href="formcad.php">Adicionar um jogador do Grêmio</a>
</body>
</html>
