<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] != 'professor') {
    header('index.php');
}
echo "Olá Professor!";
echo "<a href='logout.php'>Sair</a>";
?>