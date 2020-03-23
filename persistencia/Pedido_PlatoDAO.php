<?php
class Pedido_PlatoDAO {
    private $pedido_idpedido;
    private $plato_idplato;
    private $cantidad;
    private $descripcion;
    
    function Pedido_PlatoDAO ($pedido_idpedido, $plato_idplato, $cantidad, $descripcion){
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> plato_idplato = $plato_idplato;
        $this -> cantidad = $cantidad;
        $this -> descripcion = $descripcion;
    }
    
    function consultar(){
        return "select Pedido_idpedido, Plato_idplato, cantidad, descripcion
                from pedido_plato
                where Pedido_idpedido = '" . $this -> pedido_idpedido . "' and Plato_idplato = '". $this -> plato_idplato ."'";
    }
    
    function registrar(){
        return "INSERT INTO pedido_plato (Pedido_idpedido, Plato_idplato, cantidad, descripcion)
                VALUES (" . $this -> pedido_idpedido . ", " . $this -> plato_idplato . ", " . $this -> cantidad . ", '" . $this -> descripcion . "');";
    }
    
    function consultarReservaPlato() {
        return "select Plato_idplato, cantidad, descripcion
                from pedido_plato
                where Pedido_idpedido = " . $this -> pedido_idpedido;
    }
    
    
}
