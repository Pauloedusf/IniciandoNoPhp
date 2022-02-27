<?php
require_once 'aulaWebFuncoes.php';

$contasCorrente = [
    '1' => [
        'titular' => 'Paulo',
         'saldo' => 1000,
    ],
    '2' => [
        'titular' => 'Nicolas',
         'saldo' => 2000,
    ],
    
    '3' => [
         'titular' => 'Isabella',
          'saldo' => 3000],
    ];
    
    
    
    titularComLetrasMaiusculas($contasCorrente ['1']);
    ?>
   <!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contas Corrente </h1>
<dl> 
    <?php foreach ($contasCorrente as $cpf => $conta){?>
    <dt>
    <h3> <?= $conta['titular']; ?> 
        - 
        <?=  $cpf; ?></h3>
    </dt>
    <dd>
         Saldo: <?= $conta['saldo']; ?>
        </dd>
    <?php } ?>
</dl>
</body>
</html>
    


