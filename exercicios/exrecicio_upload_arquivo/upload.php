<?php
$diretorio = "arquivos/";
$nome_arquivo = $_FILES['arquivo']['name'];
if(move_uploaded_file($_FILES["arquivo"]["tmp_name"],$diretorio.$nome_arquivo)){
    echo "Upload realizado com sucesso.";
}else{
    echo "Upload não foi realizado.";
}
?>