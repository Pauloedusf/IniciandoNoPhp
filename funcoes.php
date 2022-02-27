<?php
function exibeMensagem ( string $mensagem) {
    echo $mensagem . PHP_EOL;}

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
   
  $conta['nome'] = mb_strtoupper($conta['nome']);
 
}

