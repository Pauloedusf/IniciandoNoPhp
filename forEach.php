<?php


$contasCorrente = [
 1 =>[ 'nome' => 'Paulo',
        'saldo' => 1000],

 2 => [ 'nome' => 'Nicolas',
        'saldo' => 2000],

 3 => ['nome' => 'Isabella',
        'saldo' => 3000],
];

foreach ($contasCorrente as $conta){
    echo $conta['nome'] . PHP_EOL;
}
foreach ($contasCorrente as $indice => $conta){
    echo "O indice desse elemento é $indice" . PHP_EOL;
}

echo $contasCorrente[0]['nome'];