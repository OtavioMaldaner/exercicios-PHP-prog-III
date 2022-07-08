<?php
    if(isset($_POST['botao'])) {
        $n1 = $_POST['number1'];
        $n2 = $_POST['number2'];
        if($_POST['botao'] == 'soma') {
            echo $n1 + $n2;
        } else if ($_POST['botao'] == 'subtrai') {
            echo $n1 - $n2;
        } else if ($_POST['botao'] == 'multiplica'){
            echo $n1 * $n2;
        } else {
            echo $n1 / $n2;
        }
    }
?>