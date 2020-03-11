<?php
<<<<<<< HEAD

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
=======
class FacturaDAO{
    private $idfactura,$montofinal,$idpedido;
    function FacturaDAO($idfactura="",$montofinal="",$idpedido=""){
        $this -> idfactura=$idfactura;
        $this -> montofinal = $montofinal;
        $this -> idpedido = $idpedido;
    }
    

    
}
?>
>>>>>>> carpetalogica
