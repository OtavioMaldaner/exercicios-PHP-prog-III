<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] != 'aluno') {
    header('index.php');
}
echo "Olá Aluno!";
echo "<a href='logout.php'>Sair</a>";
?>