<?php

class PedidoDAO {
    private $idpedido;
    private $reserva_idreserva;
    private $chef_idchef;
    private $estado;
    
    function PedidoDAO ($idpedido, $reserva_idreserva, $chef_idchef, $estado){
        $this -> idpedido = $idpedido;
        $this -> reserva_idreserva = $reserva_idreserva;
        $this -> chef_idchef = $chef_idchef;
        $this -> estado = $estado;
        
    }
    
    function consultar(){
        return "select idpedido, descripcion, reserva.idreserva, chef.nombre, estado
                from pedido, chef,reserva
                where idreserva = '" . $this -> reserva_idreserva . "' and chef.idchef= chef_idchef";
    }
    function consultarTodos(){
        return "select idpedido, descripcion, reserva_idreserva, chef.idchef, estado
                from pedido,chef
                order by idpedido";
    }
    
    function consultarId(){
        return "select idpedido
                from pedido
                where reserva_idreserva = " . $this -> reserva_idreserva ;
    }
    
    function actualizarEstado(){
        return "update pedido set
                estado = '" . $this -> estado . "'
                where idpedido=" . $this -> idpedido;
    }
    function buscarPedido($filtro){
        return "select  idpedido, descripcion, reserva_idreserva, chef.nombre, estado
                from pedido,chef
                where  descripcion like '%" . $filtro . "%' or
                 reserva_idreserva like '%" . $filtro . "%' or
                chef.nombre like '%" . $filtro . "%' 
                order by fecha";
        
    }
    
   
    
    
}

?>

