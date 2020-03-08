<?php
require 'persistencia/PedidoDAO.php';
require_once 'persistencia/Conexion.php';

class Pedido {
    private $idpedido;
    private $descripcion;
    private $reserva_idreserva;
    private $cantidad;
    private $pedidoDAO;
    private $conexion;
    
    function getIdPedido(){
        return $this -> idpedido;
    }
    
    function getDescripcion(){
        return $this -> descripcion;
    }
    
    function getReserva(){
        return $this -> reserva_idreserva;
    }
    
    function getCantidad(){
        return $this -> cantidad;
    }
    
    function Pedido($idpedido="", $descripcion="", $reserva_idreserva="", $cantidad=""){
        $this -> idpedido = $idpedido;
        $this -> descripcion = $descripcion;
        $this -> reserva_idreserva = $reserva_idreserva;
        $this -> cantidad = $cantidad;
        $this -> conexion = new Conexion();
        $this -> pedidoDAO = new PedidoDAO($idpedido, $descripcion, $reserva_idreserva, $cantidad);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> pedidoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idpedido = $resultado[0];
        $this -> descripcion = $resultado[1];
        $this -> reserva_idreserva = $resultado[2];
        $this -> cantidad = $resultado[3];
        $this -> conexion -> cerrar();
    }
    
}