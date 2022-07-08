<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <h3>Processando o código: variáveis</h3>
    <p>Ao executar os códigos a seguir, escreva como ficará o resultado na tela do navegador</p>
    <div>
        <h3>Exercício a:</h3>
        <?php
        echo"Olá";
        ?>
        <!-- O código printa a mensagem "Olá" na tela -->
    </div>
    <div>
        <h3>Exercício b:</h3>
        <?php 
        echo"Olá";
        echo"Pessoal";
        ?>
        <!-- O código printa a mensagem "OláPessoal" -->
    </div>
    <div>
        <h3>Exercício c:</h3>
        <?php
        echo"Olá<br>";
        echo"Pessoal";
        ?>
        <!-- O código printa a mensagem "Olá Pessoal" com quebra de linha -->
    </div>
    <div>
        <h3>Exercício d:</h3>
        <?php
        echo"Olá<br>Pessoal";
        ?>
        <!-- O código printa a mensagem "Olá Pessoal" com quebra de linha -->
    </div>
    <div>
        <h3>Exercício e:</h3>
        <?php
        $nome = "Douglas Costa";
        echo"Olá<br>";
        echo $nome;
        ?>
        <!-- O código printa a mensagem "Olá Douglas Costa" com quebra de linha -->
    </div>
    <div>
        <h3>Exercício f:</h3>
        <?php
        $nome = "Douglas";
        $sobrenome = "Costa";
        echo"Olá<br>".$nome.$sobrenome;
        ?>
        <!-- O código printa a mensagem "Olá DouglasCosta" com quebra de linha -->
    </div>
    <div>
        <h3>Exercício g:</h3>
        <?php
        $num = 4;
        echo $num;
        echo"<br>";
        echo $num.$num;
        ?>
        <!-- O código printa a mensagem "4 44" com quebra de linha -->
    </div>
</body>
</html>