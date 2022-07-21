<?php
function teste(&$a, &$b) {
    $c = $a;
    $a = $b;
    $b = $c;
}
?>