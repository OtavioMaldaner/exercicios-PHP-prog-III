<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco 129 - Sequência</title>
</head>
<body>
    <h1>Exercício 129</h1>
    <h2>Sequência</h2>
    <h3>Desenvolva as páginas a seguir utilizando a classe sugerida.</h3>
    <?php
        if (isset($_POST['button'])) {
            require_once 'Sequencia.class.php';
            $sequencia = new Sequencia ();
            $sequencia->setInicio($_POST['inicio']);
            $sequencia->setFim($_POST['final']);
            if ($_POST['mostrar'] == 'todos') {
                $sequencia->exibirTodosNumeros();
            } else if ($_POST['mostrar'] == 'pares') {
                $sequencia->exibirPares();
            } else if ($_POST['mostrar'] == 'impares') {
                $sequencia->exibirImpares();
            }
        } else {
    ?>
    <form action="sequencia.php" method="post">
        <label for="inicio">Selecione o valor inicial: </label>
        <select name="inicio">
            <option value="1" selected>1</option>
            <?php
                for($i = 2; $i <= 100; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
        </select>
        <label for="final">Selecione o valor final: </label>
        <select name="final">
            <?php
                for($i = 1; $i <= 99; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            <option value="100" selected>100</option>
        </select>
        <p>Mostrar:</p>
        <br>
        <p>Todos</p>
        <input type="radio" name="mostrar" value='todos' checked>
        <br>
        <p>Apenas pares</p>
        <input type="radio" name="mostrar" value='pares'>
        <br>
        <p>Apenas ímpares</p>
        <input type="radio" name="mostrar" value='impares'>
        <br>
        <input type="submit" value="Enviar" name='button'>
    </form>
    <?php
        }
    ?>
    
</body>
</html>