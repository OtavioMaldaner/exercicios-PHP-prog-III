<?php
session_start();
if (isset($_POST['botao'])){
    if ($_POST['login'] == 'aluno' && $_POST['password'] == 'Aluno') {
        $_SESSION['user'] == 'aluno';
        header('Location: aluno.php');
    } else if ($_POST['login'] == 'professor' && $_POST['password'] == 'Professor'){
        $_SESSION['user'] == 'professor';
        header('Location: professor.php');
    }
}
?>