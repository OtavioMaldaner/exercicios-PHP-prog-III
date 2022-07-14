<?php
if (isset($_POST['botao'])){
    if ($_POST['login'] == 'aluno' && $_POST['password'] == 'Aluno') {
        header('Location: aluno.php');
    } else if ($_POST['login'] == 'professor' && $_POST['password'] == 'Professor'){
        header('Location: professor.php');
    }
}
?>