<?php
require_once __DIR__."/vendor/autoload.php";
if (isset($_GET['id'])) {
    $pessoa = Pessoa::find($_GET['id']);
    // header('Location: index.php');
}
if (isset($_POST['botao'])) {
    $pessoa = new Pessoa($_POST['name'], $_POST['email']);
    $pessoa->setId($_POST['id']);
    $pessoa->save();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite um jogador do Imortal</title>
</head>
<body>
    <form action="formedit.php" method="post">
        <?php
        echo "Nome: <input type='text' name='name' required value='{$pessoa->getNome()}'>";
        ?>
        <br>
        <?php
            echo "E-mail: <input type='email' name='email' required value='{$pessoa->getEmail()}'>";
            echo "<input type='hidden' name='id' required value='{$pessoa->getId()}'>";
        ?>
        <br>
        <input type="submit" value="Enviar" name='botao'>
    </form>
</body>
</html>
