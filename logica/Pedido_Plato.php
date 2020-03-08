<?php
require 'persistencia/Pedido_PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Pedido_Plato{
    private $pedido_idpedido;
    private $plato_idplato;
    private $Pedido_PlatoDAO;
    private $conexion;
    
    function getPedido(){
        return $this -> pedido_idpedido;
    }
    
    function getPlato(){
        return $this -> plato_idplato;
    }
    
    function Pedido_Plato($pedido_idpedido="", $plato_idplato=""){
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> plato_idplato = $plato_idplato;
        $this -> conexion = new Conexion();
        $this -> Pedido_PlatoDAO = new Pedido_PlatoDAO($pedido_idpedido, $plato_idplato);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> Pedido_PlatoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> pedido_idpedido = $resultado[0];
        $this -> plato_idplato = $resultado[1];
        $this -> conexion -> cerrar();
    }
    
}