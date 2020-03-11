<?php
<<<<<<< HEAD
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
=======

class Pedido{
    private $idpedido,$descripcion,$idreserva,$cantidad;
    
    function Pedido($idpedido="",$descripcion="",$idreserva="",$cantidad=""){
        $this -> idpedido= $idpedido;
        $this -> descripcion = $descripcion;
        $this -> idreserva = $idreserva;
        $this -> cantidad = $cantidad;
    }
    
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdreserva()
    {
        return $this->idreserva;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setIdpedido($idpedido)
    {
        $this->idpedido = $idpedido;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdreserva($idreserva)
    {
        $this->idreserva = $idreserva;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

  
}?>
>>>>>>> carpetalogica
