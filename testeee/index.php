<?php
require_once __DIR__.'/vendor/autoload.php';

$estadio = new Estadio(60540);
$gremio = new Time("Super Grêmio",$estadio);
echo $gremio->getEstadio()->getCapacidade();
