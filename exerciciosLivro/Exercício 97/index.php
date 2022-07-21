<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 97</h1>
    <h2>Processando o código: inclusão de arquivos</h2>
    <h3>Considere os arquivos PHP criados na pasta "arquivos";</h3>
    <h3>Ao executar cada página PHP a seguir, escreva como ficará o resultado na tela do navegador.</h3>
    <div>
        <h1>Exercicio a:</h1>
        <?php
            include("arquivos/arquivo1.php");
            include("arquivos/arquivo1.php");
        ?>
        <!-- O código retorna "arquivo1
                               arquivo1" -->
    </div>
    <div>
        <h1>Exercicio b:</h1>
        <?php
            include_once("arquivos/arquivo1.php");
            include_once("arquivos/arquivo1.php");
        ?>
        <!-- O código retorna "
                                " (pois arquivo já está no index - Cavani)-->
    </div>
    <div>
        <h1>Exercicio c:</h1>
        <?php
            include("arquivos/arquivo2.php");
            $soma = $valor1 - $valor2;
            echo "Soma: ".$soma;
        ?>
        <!-- O código retorna "Soma: 15"-->
    </div>
    <div>
        <h1>Exercicio d:</h1>
        <?php
            include("arquivos/arquivo2.php");
            $soma = $valor1 - $valor2;
            echo "Soma: ".$soma;
            $valor1 = 2;
            $valor2 = 99;
            echo "Valor 1: ".$valor1." - ";
            echo "Valor 2: ".$valor2."<br>";
            include("arquivos/arquivo2.php");
            echo "Valor 1: ".$valor1." - ";
            echo "Valor 2: ".$valor2."<br>";
        ?>
        <!-- O código retorna "Soma: 15Valor 1: 2 - Valor 2: 99
                               Valor 1: 50 - Valor 2: 35"-->
    </div>
    <div>
        <h1>Exercicio e:</h1>
        <?php
            include_once("arquivos/arquivo2.php");
            $soma = $valor1 - $valor2;
            echo "Soma: ".$soma;
            $valor1 = 2;
            $valor2 = 99;
            echo "Valor 1: ".$valor1." - ";
            echo "Valor 2: ".$valor2."<br>";
            include_once("arquivos/arquivo2.php");
            echo "Valor 1: ".$valor1." - ";
            echo "Valor 2: ".$valor2."<br>";
        ?>
        <!-- O código retorna "Soma: 15Valor 1: 2 - Valor 2: 99
                               Valor 1: 2 - Valor 2: 99"-->
    </div>
    <div>
        <h1>Exercicio f:</h1>
        <?php
            include("arquivos/arquivo3.php");
            $a = 10;
            $b = "Oi";
            echo "A: ".$a." - B: ".$b."<br>";
            teste($a, $b);
            echo "A: ".$a." - B: ".$b."<br>";
        ?>
        <!-- O código retorna "A: 10 - B: Oi
                               A: Oi - B: 10"-->
    </div>
    <!-- <div> -->
        <!-- <h1>Exercicio g:</h1> -->
        <!--<?php
            // include("arquivos/arquivo3.php");
            // $a = 10;
            // $b = "Oi";
            // echo "A: ".$a." - B: ".$b."<br>";
            // teste($a, $b);
            // include("arquivos/arquivo3.php");
            // echo "A: ".$a." - B: ".$b;
        // ?>
        O código retorna Fatal error: Cannot redeclare teste()"
    </div> -->
    <div>
        <h1>Exercicio h:</h1>
        <?php
            include_once("arquivos/arquivo3.php");
            $a = 10;
            $b = "Oi";
            echo "A: ".$a." - B: ".$b."<br>";
            teste($a, $b);
            include_once("arquivos/arquivo3.php");
            echo "A: ".$a." - B: ".$b;
        ?>
        <!-- O código retorna "A: 10 - B: Oi
                               A: Oi - B: 10"-->
    </div>
    <div>
        <h1>Exercicio i:</h1>
        <?php
            include_once("arquivos/arquivo4.php");
            include_once("arquivos/arquivo3.php");
            echo "A: ".$a." - B: ".$b."<br>";
            teste($a, $b);
            echo "A: ".$a." - B: ".$b;
        ?>
        <!-- O código retorna "A: 10 - B: Oi
                               A: Oi - B: 10"-->
    </div>
    <div>
        <h1>Exercicio j:</h1>
        <?php
            include_once("arquivos/arquivo4.php");
            include_once("arquivos/arquivo3.php");
            echo "A: ".$a." - B: ".$b."<br>";
            teste($a, $b);
            echo "A: ".$a." - B: ".$b." - C: ".$c;
            echo "<br>";
            $a = -1;
            $b = 0;
            echo "A: ".$a." - B: ".$b."<br>";
            teste($a, $b);
            echo "A: ".$a." - B: ".$b."<br>";
        ?>
        <!-- O código retorna "A: Oi - B: 10
                               A: 10 - B: Oi - C:
                               A: -1 - B: 0
                               A: 0 - B: -1"-->
    </div>
</body>
</html>