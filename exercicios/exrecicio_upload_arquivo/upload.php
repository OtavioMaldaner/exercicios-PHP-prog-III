<?php
// print_r($_FILES['arquivo']);
// foreach($_FILES['arquivo'] as $arquivo){
// var_dump($arquivo);
$diretorio = "arquivos/";
$diretorioImagens = 'imagens/';
$nome_arquivo = $_FILES['arquivo']['name'];
$info_name = explode(".",$nome_arquivo);
$extensao = end($info_name);
$extensao = strtolower($extensao);
// var_dump($extensao);
if($extensao == 'png'){
    if(move_uploaded_file($_FILES['arquivo']["tmp_name"],$diretorioImagens.uniqid().".".$extensao)){
        echo "Upload ".$nome_arquivo." realizado com sucesso no diretório ".$diretorioImagens.".";
    } else {
        echo "Upload não foi realizado.";
    }
} else {
    if(move_uploaded_file($_FILES['arquivo']["tmp_name"],$diretorio.uniqid().".".$extensao)){
        echo "Upload ".$nome_arquivo." realizado com sucesso no diretório ".$diretorio.".";
    } else {
        echo "Upload não foi realizado.";
    }
}
    // }

?>