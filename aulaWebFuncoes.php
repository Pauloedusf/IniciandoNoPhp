<?php
function exibeMensagem ( string $mensagem) {
    echo $mensagem . '<br>' ;}

function saca ($valor, $conta){
        if ($valor > $conta['saldo']) {
            exibeMensagem( "Saldo insuficiente!");
        } else{
            $conta['saldo'] -= $valor;
        }
        return $conta;
        
    }

function deposita(float $valor , array $conta){

      if($valor > 0){
        $conta['saldo'] += $valor;
        exibeMensagem("Deposito efetuado.");
      } else{
          exibeMensagem("Valor precisa ser positivo. ");
      }
        return $conta;
    }
function titularComLetrasMaiusculas(array &$conta){
   
  $conta['titular'] = mb_strtoupper($conta['titular']);
 
}
function exibeConta (array $conta){
    ['titular'=> $titular, 'saldo' => $saldo] = $conta;
    echo  "<li> Titular: $titular . Saldo:  $saldo</li>";
}
