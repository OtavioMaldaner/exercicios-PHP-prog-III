<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 139 - Cidade, estado e país</title>
</head>
<body>
    <h1>Exercício 139</h1>
    <h2>Cidade, estado e país</h2>
    <h3>Implemente as páginas a seguir, considerando o protótipo de tela e o diagrama de classes fornecido.</h3>
    <?php
    require_once 'Cidade.class.php';
    require_once 'Estado.class.php';
    require_once 'Pais.class.php';
    $c1 = new Cidade('Curitiba');
    $c2 = new Cidade('Maringá');
    $c3 = new Cidade('Londrina');
    $e1 = new Estado();
    $e1->setNome('Paraná');
    $e1->adicionaCidade($c1);
    $e1->adicionaCidade($c2);
    $e1->adicionaCidade($c3);
    $c4 = new Cidade('Lages');
    $c5 = new Cidade('Florianópolis');
    $e2 = new Estado();
    $e2->setNome('Santa Catarina');
    $e2->adicionaCidade($c4);
    $e2->adicionaCidade($c5);
    $c6 = new Cidade('Bento Gonçalves');
    $c7 = new Cidade('Caxias do Sul');
    $c8 = new Cidade('Farroupilha');
    $c9 = new Cidade('Garibaldi');
    $e3 = new Estado();
    $e3->setNome('Rio Grande do Sul');
    $e3->adicionaCidade($c6);
    $e3->adicionaCidade($c7);
    $e3->adicionaCidade($c8);
    $e3->adicionaCidade($c9);
    $pais = new Pais();
    $pais->adicionaEstado($e1);
    $pais->adicionaEstado($e2);
    $pais->adicionaEstado($e3);
    echo $pais->montaTabela();
    ?>
</body>
</html>