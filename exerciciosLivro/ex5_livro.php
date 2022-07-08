<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5</h1>
    <h3>Processando o código: funções de data e string</h3>
    <p>Ao executar os códigos a seguir, escreva como ficará o resultado na tela do navegador</p>
    <div>
        <h3>Exercício a:</h3>
        <?php
        $data = date('d-m-y');
        echo "Data: " . $data;
        ?>
        <!-- O código printa a mensagem "Data: 30-06-22" na tela -->
    </div>
    <div>
        <h3>Exercício b:</h3>
        <?php
        $jan1 = mktime(0, 0, 0, 1, 31, 2014);
        $jan1_30 = mktime(0, 30, 0, 1, 31, 2014);
        $dif = $jan1_30 - $jan1;
        echo $dif;
        ?>
        <!-- O código printa a mensagem "1800" na tela -->
    </div>
    <div>
        <h3>Exercício c:</h3>
        <?php
        $msg = "Olá, mundo!";
        echo lcfirst($msg) . "<br>";
        echo ucfirst($msg) . "<br>";
        echo ucwords($msg) . "<br>";
        echo strtolower($msg) . "<br>";
        echo strtoupper($msg) . "<br>";
        ?>
        <!-- O código printa a mensagem "olá, mundo!
                                         Olá, mundo!
                                         Olá, Mundo!
                                         olá, mundo!
                                         OLá, MUNDO!" na tela -->
    </div>
    <div>
        <h3>Exercício d:</h3>
        <?php
        $msg = "    Cheio de espaços    ";
        echo ltrim($msg) . "<br>";
        echo rtrim($msg) . "<br>";
        echo trim($msg) . "<br>";
        ?>
        <!-- O código printa a mensagem "Cheio de espaços
                                         Cheio de espaços
                                         Cheio de espaços" na tela -->
    </div>
    <div>
        <h3>Exercício e:</h3>
        <?php
        $busca = "nome";
        $troca = "Douglas Costa";
        $frase = "E aí, nome!";
        $msg = str_replace($busca, $troca, $frase);
        echo $msg;
        ?>
        <!-- O código printa a mensagem "E aí, Douglas Costa!" na tela -->
    </div>
    <div>
        <h3>Exercício f:</h3>
        <?php
        $msg = "Huepa, como foi seu dia?";
        echo strlen($msg) . "<br>";
        echo substr_count($msg, 'Huepa');
        ?>
        <!-- O código printa a mensagem "24
                                         1" na tela -->
    </div>
    <div>
        <h3>Exercício g:</h3>
        <?php
        $msg = "abcdefghijklmnopqrstuvwxyz";
        echo substr($msg, 0, 1) . "<br>";
        echo substr($msg, 3, 5) . "<br>";
        echo substr($msg, 10, -2) . "<br>";
        echo substr($msg, strlen($msg) -2, 1);
        ?>
        <!-- O código printa a mensagem "a
                                         defgh
                                         klmnopqrstuvwx
                                         y" na tela -->
    </div>
    </body>
</html>