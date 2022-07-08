<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7</h1>
    <h2>Diferença de datas</h2>
    <h3>Usando a função mktime, faça uma página PHP que calcule a diferença de dias entre as seguintes datas: 28/02/2016 e 04/03/2016.</h3>
    <div>
        <?php
            $data1 = mktime(0, 0, 0, 2, 28, 2016);
            $data2 = mktime(0, 0, 0, 3, 4, 2016);
            echo ($data2 - $data1) / 86400 . " dias";
        ?>
    </div>
</body>
</html>