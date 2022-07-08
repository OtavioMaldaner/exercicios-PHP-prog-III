<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 62</title>
</head>
<body>
    <h1>Exercício 62</h1>
    <h2>Campeonato Brasileiro</h2>
    <h3>Dado um array com nomes e pontos dos times do Brasileirão, exiba-os em ordem ascendente ou decrescente. Para isso, ao lado do título no cabeçalho da tabela, coloque dois links: um indicando para cima e outro para baixo. Ao clicar "para cima" ou quando não houver indicação, os nomes ou os pontos deverão ser exibidos alfabeticamente, ao clicar para baixo, a exibição será invertida.</h3>
    <?php 
        // $times = ['Cruzeiro', 'Grêmio', 'Atlético-PR','Botafogo', 'Corinthians'];
        // $pontos = [31, 31, 30, 29, 26];
        $times = [];
        $times['Cruzeiro'] = '31';
        $times['Grêmio'] = '31';
        $times['Atlético-PR'] = '30';
        $times['Botafogo'] = '29';
        $times['Corinthians'] = '26';
        var_dump($times); 
        // foreach($time as $times) {
        //     echo $time[1];
        // }
    ?>
</body>
</html>