<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <h1>Exercício 6</h1>
    <h3>Dadas três variáveis com os seguintes valores ($n1 = 2, $n2 = 5, $n3 = 8), faça um programa em PHP que :</h3>
    <h4>a) Determine a soma dos três números.</h4>
    <h4>b) Determine a raiz quadrada do produto dos três números.</h4>
    <?php
        $n1 = 2;
        $n2 = 5;
        $n3 = 8;
    ?>
    <div>
        <h3>Exercício a:</h3> 
        <?php
            echo $n1 + $n2 + $n3;
        ?>
    </div>
    <div>
        <h3>Exercício b:</h3>
        <?php
        $produto = $n1 * $n2 * $n3;
        echo sqrt($produto);
        ?>
    </div>
</body>
</html>