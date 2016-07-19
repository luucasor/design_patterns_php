<?php

require_once("Imposto.php");
require_once("Orcamento.php");

class CalculadoraDeImpostos{
  function calcula(Orcamento $orcamento, Imposto $imposto){
    return $imposto->calcula($orcamento);
  }
}
?>
