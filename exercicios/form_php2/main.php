<?php
print_r($_POST);
    if(isset($_POST['botao'])) {
        $n1 = $_POST['number1'];
        $n2 = $_POST['number2'];
        if($_POST['select'] == 'soma') {
            echo $n1 + $n2;
        } else if ($_POST['select'] == 'subtrai') {
            echo $n1 - $n2;
        } else if ($_POST['select'] == 'multiplica'){
            echo $n1 * $n2;
        } else {
            echo $n1 / $n2;
        }
    }
    echo"<div>
            <a href='./index.html'>Voltar</a>
        </div>";
?>