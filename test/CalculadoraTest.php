<?php

  class CalculadoraTest extends PHPUnit_Framework_TestCase{

    public function testCalculoDeImpostoICMS(){
      $orcamento = new Orcamento(500);
      $imposto = new ICMS();
      $calculadora = new CalculadoraDeImpostos();

      $this->assertEquals(50, $calculadora->calcula($orcamento, $imposto));
    }
  }
?>
