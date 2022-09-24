<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar festa</title>
</head>
<body>
    <form action="formFesta.php" method="post">
        Nome: <input type="text" name="nome" required> <br>
        Endereço: <input type="text" name="endereco" required> <br>
        Cidade: <input type="text" name="cidade" required> <br>
        Data: <input type="date" name="dia" required> <br>
        <input type="submit" value="Enviar" name="botao">
    </form>
    <?php
    if (isset($_POST['botao'])) {
        $festa = new Festa($_POST['nome'], $_POST['endereco'], $_POST['cidade'], $_POST['dia']);
        $festa->save();
        header('Location: index.php');
    }
    ?>
</body>
</html>