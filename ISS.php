<?php

require_once("Imposto.php");
require_once("Orcamento.php");

class ISS implements Imposto{
  function calcula(Orcamento $orcamento){
    return $orcamento->getValor * 0.06;
  }
}
?>
