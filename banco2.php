<?php
require_once 'funcoes.php';

$contasCorrente = [
'1' => [
    'nome' => 'Paulo',
     'saldo' => 1000,
],
'2' => [
    'nome' => 'Nicolas',
     'saldo' => 2000,
],

'3' => [
     'nome' => 'Isabella',
      'saldo' => 3000],
];

//unset($contasCorrente['2']);

foreach($contasCorrente as $cpf =>$conta){
    list ('nome' => $nome, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $nome $saldo");
}
