<?php
require 'persistencia/ReservaDAO.php';
require_once 'persistencia/Conexion.php';

class Reserva {
    private $idreserva;
    private $hora;
    private $fecha;
    private $cliente_idcliente;
    private $mesa_idmesa;
    private $recepcionista_idrecepcionista;
    private $estado;
    private $reservaDAO;
    private $conexion;
    
    function Administrador($idreserva="", $hora="", $fecha="", $cliente_idcliente="", $mesa_idmesa="", $recepcionista_idrecepcionista="" ){
        $this -> idreserva = $idreserva;
        $this -> hora = $hora;
        $this -> fecha = $fecha;
        $this -> cliente_idcliente = $cliente_idcliente;
        $this -> recepcionista_idrecepcionista = $recepcionista_idrecepcionista;
        $this -> estado = $estado;
        $this -> conexion = new Conexion();
        $this -> reservaDAO = new ReservaDAO($idreserva, $hora, $fecha, $cliente_idcliente, $mesa_idmesa, $recepcionista_idrecepcionista);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> reservaDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idreserva = $resultado[0];
        $this -> hora = $resultado[1];
        $this -> fecha = $resultado[2];
        $this -> cliente_idcliente = $resultado[3];
        $this -> recepcionista_idrecepcionista = $resultado[4];
        $this -> estado = $resultado[5];
        $this -> conexion -> cerrar();
    }
    
}