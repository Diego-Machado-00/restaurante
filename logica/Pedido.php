<?php

require 'persistencia/PedidoDAO.php';
require_once 'persistencia/Conexion.php';

class Pedido {
    private $idpedido;
    private $descripcion;
    private $reserva_idreserva;
    private $chef_idchef;
    private $estado;
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
    
    function getChef(){
        return $this -> chef_idchef;
    }
    
    
    function getEstado(){
        return $this -> estado;
    }
    
    
    function Pedido($idpedido="", $descripcion="", $reserva_idreserva="", $chef_idchef="" , $estado=""){
        $this -> idpedido = $idpedido;
        $this -> descripcion = $descripcion;
        $this -> reserva_idreserva = $reserva_idreserva;
        $this -> chef_idchef = $chef_idchef;
        $this -> estado = $estado;
        $this -> conexion = new Conexion();
        $this -> pedidoDAO = new PedidoDAO($idpedido, $descripcion, $reserva_idreserva,$chef_idchef, $estado);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> pedidoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idpedido = $resultado[0];
        $this -> descripcion = $resultado[1];
        $this -> reserva_idreserva = $resultado[2];
        $this -> chef_idchef = $resultado[3];
        $this -> estado = $resultado[4];
        $this -> conexion -> cerrar();
    }
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> pedidoDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Pedido($registro[0], $registro[1], $registro[2], $registro[3] ,$registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    function actualizarEstado(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> pedidoDAO -> actualizarEstado());
        $this -> conexion -> cerrar();
    }
    function buscarPedido($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> pedidoDAO -> buscarPedido($filtro));
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Pedido($registro[0], $registro[1], $registro[2], $registro[3] , $registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
}

?>

