<?php
require_once("Orcamento.php");

interface Imposto{
    function calcula(Orcamento $orcamento);
}
?>
