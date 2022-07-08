<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4</h1>
    <h3>Processando o código: operadores lógicos e relacionais</h3>
    <p>Ao executar os códigos a seguir, escreva como ficará o resultado na tela do navegador</p>
    <div>
        <h3>Exercício a:</h3>
        <?php
        $x = "10";
        $y = 10;
        echo ($x == $y) . "<br>";
        echo ($x === $y) . "<br>";
        echo ($x != $y) . "<br>";
        echo ($x !== $y);
        ?>
        <!-- O código printa a mensagem "1
        
        
                                         1" na tela -->
    </div>
    <div>
        <h3>Exercício b:</h3>
        <?php
        $x = 15;
        $y = 10;
        echo ($x > $y) . "<br>";
        echo ($x < $y) . "<br>";
        echo ($x >= $y) . "<br>";
        echo ($x <= $y);
        ?>
        <!-- O código printa a mensagem "1
        
                                         1" na tela -->
    </div>
    <div>
        <h3>Exercício c:</h3>
        <?php
        $a = true;
        $b = false;
        echo ($a && $b) . "<br>";
        echo ($a || $b) . "<br>";
        echo (!$a);
        ?>
        <!-- O código printa a mensagem "
        
                                         1" na tela -->
    </div>
    <div>
        <h3>Exercício d:</h3>
        <?php
        $a = "HUEEEPAAA";
        echo ($a && $b) . "<br>";
        echo ($a || $b) . "<br>";
        echo (!$a);
        ?>
        <!-- O código printa a mensagem "
        
                                         1" na tela -->
    </div>
</body>
</html>