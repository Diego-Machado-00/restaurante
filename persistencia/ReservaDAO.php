<?php

class ReservaDAO {
    private $idreserva;
    private $hora;
    private $fecha;
    private $cliente_idcliente;
    private $mesa_idmesa;
    private $recepcionista_idrecepcionista;
    private $estado;
    
    function ReservaDAO($idreserva, $hora, $fecha, $cliente_idcliente, $mesa_idmesa, $recepcionista_idrecepcionista, $estado){
        $this -> idreserva = $idreserva;
        $this -> hora = $hora;
        $this -> fecha = $fecha;
        $this -> cliente_idcliente = $cliente_idcliente;
        $this -> recepcionista_idrecepcionista = $recepcionista_idrecepcionista;
        $this -> estado = $estado;
    }
    
    function consultar() {
        return "select idreserva, hora, fecha, cliente_idcliente, mesa_idmesa, recepcionista_idrecepcionista, estado
                from reserva
                where idreserva =" . $this -> idreserva;
    }
    
   
}


?>

