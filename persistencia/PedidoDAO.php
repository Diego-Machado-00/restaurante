<?php
class PedidoDAO{
    private $idpedido,$descripcion,$idreserva,$cantidad;
    
    function PedidoDAO($idpedido="",$descripcion="",$idreserva="",$cantidad=""){
        $this -> idpedido= $idpedido;
        $this -> descripcion = $descripcion;
        $this -> idreserva = $idreserva;
        $this -> cantidad = $cantidad;
    }
    
}
?>