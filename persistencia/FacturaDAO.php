<?php
class FacturaDAO{
    private $idfactura,$montofinal,$idpedido;
    function FacturaDAO($idfactura="",$montofinal="",$idpedido=""){
        $this -> idfactura=$idfactura;
        $this -> montofinal = $montofinal;
        $this -> idpedido = $idpedido;
    }
    

    
}
?>