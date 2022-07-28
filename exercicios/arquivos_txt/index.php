<?php
$linhas = file("arquivo.txt");
foreach($linhas as $linha){
    $conteudo = explode(",",$linha);
    echo "{$conteudo[0]} ($conteudo[1])<br>";
}
