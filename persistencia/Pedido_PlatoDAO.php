<?php
class Pedido_PlatoDAO {
    private $pedido_idpedido;
    private $plato_idplato;
    
    function Plato_PlatoDAO ($pedido_idpedido, $plato_idplato){
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> plato_idplato = $plato_idplato;
        
    }
    
    function consultar(){
        return "select Pedido_idpedido, Plato_idplato, Chef_idchef, estado
                from pedido_plato
                where Pedido_idpedido = '" . $this -> pedido_idpedido . "' and Plato_idplato = '". $this -> plato_idplato ."'";
    }
    
}
