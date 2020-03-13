<?php

class PedidoDAO {
    private $idpedido;
    private $descripcion;
    private $reserva_idreserva;
    private $chef_idchef;
    private $estado;
    
    function IngredienteDAO ($idpedido, $descripcion, $reserva_idreserva, $chef_idchef, $estado){
        $this -> idpedido = $idpedido;
        $this -> descripcion = $descripcion;
        $this -> reserva_idreserva = $reserva_idreserva;
        $this -> chef_idchef = $chef_idchef;
        $this -> estado = $estado;
        
    }
    
    function consultar(){
        return "select idpedido, descripcion, reserva_idreserva, chef.nombre, estado
                from pedido, chef
                where idreserva = '" . $this -> idreserva . "' and chef.idchef= chef_idchef";
    }
    
}

?>

