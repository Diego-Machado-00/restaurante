<?php
require 'persistencia/Pedido_PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Pedido_Plato{
    private $pedido_idpedido;
    private $plato_idplato;
    private $chef_idchef;
    private $estado;
    private $Pedido_PlatoDAO;
    private $conexion;
    
    function getPedido(){
        return $this -> pedido_idpedido;
    }
    
    function getPlato(){
        return $this -> plato_idplato;
    }
    
    function getChef(){
        return $this -> chef_idchef;
    }
    
    function getEstado(){
        return $this -> estado;
    }
    
    function Pedido_Plato($pedido_idpedido="", $plato_idplato="", $chef_idchef="", $estado = ""){
        $this -> Pedido_idpedido = $pedido_idpedido;
        $this -> Plato_idplato = $plato_idplato;
        $this -> chef_idchef = $chef_idchef;
        $this -> estado = $estado;
        $this -> conexion = new Conexion();
        $this -> Pedido_PlatoDAO = new Pedido_PlatoDAO($pedido_idpedido, $plato_idplato, $chef_idchef, $estado);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> Pedido_PlatoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> pedido_idpedido = $resultado[0];
        $this -> plato_idplato = $resultado[1];
        $this -> chef_idchef = $resultado[2];
        $this -> estado = $resultado[3];
        $this -> conexion -> cerrar();
    }
    
}