<?php
function margarida($flores){
    $margaridas = 0;
    if(is_array($flores)){
        foreach($flores as $flor){
            if($flor == 'margarida'){
                $margaridas ++;
            }
        }
    }
    return $margaridas;
}
$buque[] = "rosa";
$buque[] = "margarida";
$buque[] = "rosa";
$buque[] = "cravo";
$buque[] = "margarida";
$buque[] = "cravo";
$buque[] = "margarida";
$buque[] = "rosa";

echo margarida($buque); // 3
?>