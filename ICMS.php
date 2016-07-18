<?php

  require "Orcamento.php";
  require "Imposto.php";

  class ICMS implements Imposto{

    function calcula(Orcamento $orcamento){
      return $orcamento->getValor() * 0.1;
    }
  }

?>
