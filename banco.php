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



titularComLetrasMaiusculas($contasCorrente ['1']);

foreach($contasCorrente as $cpf => $conta){
    list ('nome' => $nome, 'saldo'=> $saldo) = $conta;
    exibeMensagem(
        "$cpf $nome $saldo" 
        );
}
