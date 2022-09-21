<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo ao Imortal</title>
</head>
<body>
    <form action="formcad.php" method="post">
        Nome: <input type="text" name="name" required>
        <br>
        E-mail: <input type="email" name="email" required>
        <br>
        <input type="submit" value="Enviar" name='botao'>
    </form>
</body>
</html>
<?php
if (isset($_POST['botao'])) {
    $pessoa = new Pessoa($_POST['name'], $_POST['email']);
    $pessoa->save();
    header('Location: index.php');
}
?>