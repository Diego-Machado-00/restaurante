<?php
require 'persistencia/Pedido_PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Pedido_Plato{
    private $pedido_idpedido;
    private $plato_idplato;
    private $cantidad;
    private $Pedido_PlatoDAO;
    private $conexion;
    
    function getPedido(){
        return $this -> pedido_idpedido;
    }
    
    function getPlato(){
        return $this -> plato_idplato;
    }
    
    
    function getCantidad(){
        return $this -> cantidad;
    }
    
    function Pedido_Plato($pedido_idpedido="", $plato_idplato="", $cantidad = ""){
        $this -> Pedido_idpedido = $pedido_idpedido;
        $this -> Plato_idplato = $plato_idplato;
        $this -> cantidad = $cantidad;
        $this -> conexion = new Conexion();
        $this -> Pedido_PlatoDAO = new Pedido_PlatoDAO($pedido_idpedido, $plato_idplato, $cantidad);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> Pedido_PlatoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> pedido_idpedido = $resultado[0];
        $this -> plato_idplato = $resultado[1];
        $this -> cantidad = $resultado[2];
        $this -> conexion -> cerrar();
    }
    
}