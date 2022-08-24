<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco 127 - Retângulo</title>
</head>
<body>
    <h1>Exercício 127</h1>
    <h2>Retângulo</h2>
    <h3>Desenvolva a página "retangulo.php" considerando que: se o botão "Calcula Área" foi pressionado, a página deverá mostrar o valor calculado; caso contrário, o formulário deverá ser exibido.</h3>
    <?php
        if (isset($_POST['button'])) {
            require_once 'Retangulo.class.php';
            $retangulo = new Retangulo ();
            $retangulo->setLadoMaior($_POST['largura']);
            $retangulo->setLadoMenor($_POST['altura']);
            $area = $retangulo->calculaArea();
            echo 'A área do retângulo é: '.$area;
        } else {
    ?>
    <form action="retangulo.php" method="post">
        <label for="largura">Informe a largura: </label>
        <input type="text" name='largura'>
        <label for="altura">Informe a altura: </label>
        <input type="text" name='altura'>
        <input type="submit" name='button' value="Calcula Área">
    </form>
    <?php
        }
    ?>
    
</body>
</html>