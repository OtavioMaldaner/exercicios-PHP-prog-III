<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 65</title>
</head>
<body>
<h1>Exercício 65</h1>
    <h2>Ginastas</h2>
    <h3>Considere que você tenha o código a seguir. Implemente uma página PHP que:</h3>
    <h4>a) Mostre a lista com o nome de todas as ginastas.</h4>
    <h4>b) Mostre a média de notas.</h4>
    <h4>c) Mostre a lista com o nome das ginastas com a nota acima de 13.</h4>
    <h4>d) Mostre a lista com o nome das ginastas americanas.</h4>
    <h4>e) Mostre a lista com a quantidade de ginastas por país.</h4>
    <h4>f) Mostre o nome da ginasta com a nota mais alta.</h4>
    <?php
        $ginastas[0]['nome'] = 'Jade';
        $ginastas[0]['nota'] = 12.95;
        $ginastas[0]['país'] = 'Brasil';
        $ginastas[1]['nome'] = 'Shawn';
        $ginastas[1]['nota'] = 13.50;
        $ginastas[1]['país'] = 'EUA';
        $ginastas[2]['nome'] = 'Daiane';
        $ginastas[2]['nota'] = 14.35;
        $ginastas[2]['país'] = 'Brasil';
        $ginastas[3]['nome'] = 'Nadia';
        $ginastas[3]['nota'] = 12.90;
        $ginastas[3]['país'] = 'Romênia';
    ?>
    <div>
        <h1>Exercício a:</h1>
        <?php
            $nomes = [];
            foreach($ginastas as $ginasta) {
                $nomes[] = $ginasta['nome']; 
            }
            var_dump($nomes);
        ?>
    </div>
    <div>
        <h1>Exercício b:</h1>
        <?php
            $notas = 0;
            $quantidade = 0;
            foreach($ginastas as $ginasta) {
                $notas += $ginasta['nota'];
                $quantidade ++; 
            }
            $media = $notas / $quantidade;
            echo 'A média de notas é '.$media;
        ?>
    </div>
    <div>
        <h1>Exercício c:</h1>
        <?php
            $nomes = [];
            foreach($ginastas as $ginasta) {
                if ($ginasta['nota'] >= 13) {
                    $nomes[] = $ginasta['nome']; 
                }
            }
            echo 'As ginastas com média maior que 13 são: <br>';
            var_dump($nomes);
        ?>
    </div>
    <div>
        <h1>Exercício d:</h1>
        <?php
            $nomes = [];
            foreach($ginastas as $ginasta) {
                if ($ginasta['país'] == 'EUA') {
                    $nomes[] = $ginasta['nome']; 
                }
            }
            echo 'A(s) ginasta(s) americanas são: <br>';
            var_dump($nomes);
        ?>
    </div>
    <div>
        <h1>Exercício e:</h1>
        <?php
            foreach($ginastas as $ginasta) {
                $pais = $ginasta['país'];
                @$paises[$pais] ++;
            }
            echo 'A(s) ginasta(s) por país são: <br>';
            var_dump($paises);
        ?>
    </div>
    <div>
    <h1>Exercício f:</h1>
        <?php
            $maisAlta = -1;
            $nota = -1;
            foreach($ginastas as $posicao=> $ginasta) {
                if ($ginasta['nota'] > $nota) {
                    $nota = $ginasta['nota'];
                    $maisAlta = $posicao;
                }
            }
            echo 'A ginasta com a maior média é '.$ginastas[$maisAlta]['nome'];
        ?>
    </div>
</body>
</html>