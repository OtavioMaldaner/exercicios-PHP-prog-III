<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<h1>Exercício 3</h1>
    <h3>Processando o código: operadores aritméticos</h3>
    <p>Ao executar os códigos a seguir, escreva como ficará o resultado na tela do navegador</p>
    <div>
        <h3>Exercício a:</h3>
        <?php
        $x = 1;
        $x = -$x;
        $y = $x;
        echo $x."<br>".$y;
        ?>
        <!-- O código printa a mensagem "-1 
                                         -1" com quebra de linha na tela -->
    </div>
    <div>
        <h3>Exercício b:</h3>
        <?php
        $a = 13;
        $b = $a % 4;
        $c = $b / 5;
        $d = (int)($b /5);
        echo $b."<br>".$c ."<br>" .$d;
        ?>
        <!-- O código printa a mensagem "1
                                         0.2
                                         0" na tela -->
    </div>
    <div>
        <h3>Exercício c:</h3>
        <?php
        $x = 10;
        $x /= 4;
        echo $x. "<br>";
        echo floor($x). "<br>";
        echo ceil($x). "<br>";
        ?>
        <!-- O código printa a mensagem "2.5
                                         2
                                         3" na tela -->
    </div>
    <div>
        <h3>Exercício d:</h3>
        <?php
        echo round(3.4). "<br>";
        echo round(3.5). "<br>";
        echo round(3.6). "<br>";
        echo round(5.045, 2). "<br>";
        echo round(5.055, 2). "<br>";
        ?>
        <!-- O código printa a mensagem "3
                                         4
                                         4
                                         5.05
                                         5.06" na tela -->
    </div>
    <div>
        <h3>Exercício e:</h3>
        <?php
        echo round(3.4). "<br>";
        echo round(3.5). "<br>";
        echo round(3.6). "<br>";
        echo round(5.045, 2). "<br>";
        echo round(5.055, 2). "<br>";
        ?>
        <!-- O código printa a mensagem "3
                                         4
                                         4
                                         5.05
                                         5.06" na tela -->
    </div>
    <div>
        <h3>Exercício e:</h3>
        <?php
        $x = -10;
        $y = 10;
        echo abs($x). "<br>" .abs($y);
        ?>
        <!-- O código printa a mensagem "10
                                         10" na tela -->
    </div>
    <div>
        <h3>Exercício f:</h3>
        <?php
        $n = 2;
        $x = 3;
        $p = pow($n, $x);
        echo $p. "<br>";
        $r = 9;
        echo sqrt($r);
        ?>
        <!-- O código printa a mensagem "8
                                         3" na tela -->
    </div>
    <div>
        <h3>Exercício g:</h3>
        <?php
        $min = 1;
        $max = 10;
        echo rand($min, $max);
        ?>
        <!-- O código printa um número aleatório na tela -->
    </div>
    <div>
        <h3>Exercício h:</h3>
        <?php
        $a = 5;
        echo $a++ . "<br>";
        echo $a . "<br>";
        $a = 5;
        echo ++$a . "<br>";
        echo $a . "<br>";
        $a = 5;
        echo $a-- . "<br>";
        echo $a . "<br>";
        $a = 5;
        echo --$a . "<br>";
        echo $a . "<br>";
        ?>
        <!-- O código printa a mensagem "5
                                         6
                                         6
                                         6
                                         5
                                         4
                                         4
                                         4" na tela -->
    </div>
</body>
</html>