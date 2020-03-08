<?php

class FacturaDAO {
    private $idfactura;
    private $montoFinal;
    private $pedido_idpedido;
    
    function FacturaDAO($idfactura, $montoFinal, $pedido_idpedido){
        $this -> idfactura = $idfactura;
        $this -> montoFinal = $montoFinal;
        $this -> pedido_idpedido = $pedido_idpedido;
    }
    
    
}
