<?php

require_once("../Orcamento.php");
require_once("../Imposto.php");
require_once("../ICMS.php");
require_once("../CalculadoraDeImpostos.php");

  class CalculadoraTest extends PHPUnit_Framework_TestCase{

    public function testCalculoDeImpostoICMS(){
      $consulta = new Orcamento(500);
      $imposto = new ICMS();
      $calculadora = new CalculadoraDeImpostos();

      $this->assertEquals(75, $calculadora->calcula($consulta, $imposto));
    }
  }
?>
