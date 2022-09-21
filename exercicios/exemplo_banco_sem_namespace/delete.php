<?php
require_once __DIR__."/vendor/autoload.php";
$pessoa = Pessoa::find($_GET['id']);
if ($pessoa->delete()) {
    echo 'Pessoa excluída com sucesso';
} else {
    echo 'Tente excluir a pessoa novamente';
}
header('Location: index.php');