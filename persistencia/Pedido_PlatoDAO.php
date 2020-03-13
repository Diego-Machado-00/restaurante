<?php
class Pedido_PlatoDAO {
    private $pedido_idpedido;
    private $plato_idplato;
    private $cantidad;
    
    function Plato_PlatoDAO ($pedido_idpedido, $plato_idplato, $cantidad){
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> plato_idplato = $plato_idplato;
        $this -> cantidad = $cantidad;
        
    }
    
    function consultar(){
        return "select pedido_idpedido, plato_idplato, cantidad
                from pedido_plato
                where pedido_idpedido = '" . $this -> pedido_idpedido . "' and plato_idplato = '". $this -> plato_idplato ."'";
    }
    
}
