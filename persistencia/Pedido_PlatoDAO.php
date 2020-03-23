<?php
class Pedido_PlatoDAO {
    private $pedido_idpedido;
    private $plato_idplato;
    private $cantidad;
    private $descripcion;
    
    function Plato_PlatoDAO ($pedido_idpedido, $plato_idplato, $cantidad, $descripcion){
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> plato_idplato = $plato_idplato;
        $this -> cantidad = $cantidad;
        $this -> descripcion = $descripcion;
    }
    
    function consultar(){
        return "select pedido_idpedido, plato_idplato, cantidad, descripcion
                from pedido_plato
                where pedido_idpedido = '" . $this -> pedido_idpedido . "' and plato_idplato = '". $this -> plato_idplato ."'";
    }
    
    function registrar(){
        return "insert into pedido_plato
                ( pedido_idpedido, plato_idplato, cantidad, descripcion)
                values (" . $this->pedido_idpedido . ", " . $this->plato_idplato . ", " . $this->cantidad . ", '" . $this->descripcion . "')";
    }
    
    function consultarReservaPlato() {
        return "select plato_idplato, cantidad, descripcion
                from pedido_plato
                where pedido_idpedido = '" . $this -> pedido_idpedido;
    }
    
    
}
