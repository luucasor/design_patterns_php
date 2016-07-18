<?php

  require "Orcamento.php";
  require "Imposto.php";

  class ISS implements Imposto{
    function calcula(Orcamento $orcamento){
      return $orcamento->getValor * 0.06;
    }
  }
?>
