<?php

$peso = 94;
$altura = 1.81;
$imc = $peso / ($altura *$altura);

if ($imc <= 18.4){
    echo "Voce esta abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 34.4){
    echo "Voce esta com o imc normal";
} else {
    echo "Voce esta acima no peso";
}
