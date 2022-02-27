<?php

$idadeLista = [32,9,28,50];
$idadeLista[count($idadeLista)] = 51;
// para adicionar no ultimo indice nao precisa colocar nada dentro do colchetes.
foreach($idadeLista as $idade){
    echo $idade . PHP_EOL;
}
