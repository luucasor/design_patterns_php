<?php

require_once("Imposto.php");
require_once("Orcamento.php");

class ICMS implements Imposto{

  function calcula(Orcamento $orcamento){
    return ($orcamento->getValor() * 0.05) + 50.00;
  }
}

?>
