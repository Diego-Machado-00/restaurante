<?php

class PedidoDAO {
    private $idpedido;
    private $descripcion;
    private $reserva_idreserva;
    private $cantidad;
    
    function IngredienteDAO ($idpedido, $descripcion, $reserva_idreserva, $cantidad){
        $this -> idpedido = $idpedido;
        $this -> descripcion = $descripcion;
        $this -> reserva_idreserva = $reserva_idreserva;
        $this -> cantidad = $cantidad;
        
    }
    
    function consultar(){
        return "select idpedido, descripcion, reserva_idreserva, cantidad
                from pedido
                where idreserva = '" . $this -> idreserva . "'";
    }
    
}

?>

