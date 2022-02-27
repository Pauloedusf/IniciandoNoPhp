<?php

$conta1 = [
    'nome' => 'Paulo',
     'saldo' => 1000];
$conta2 = [
    'nome' => 'Nicolas',
     'saldo' => 2000];
$conta3 = [
     'nome' => 'Isabella',
      'saldo' => 3000];

$contasCorrente = [$conta1,$conta2,$conta3];

for($i = 0 ; $i < count($contasCorrente) ; $i++ ){
    echo $contasCorrente[$i]['nome'] . PHP_EOL;
}