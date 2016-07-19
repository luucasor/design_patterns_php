<?php
class Orcamento{

    private $valor;

    function Orcamento($valor){
      $this->valor = $valor;
    }

    public function getValor() {
      return $this->valor;
    }
}
?>
