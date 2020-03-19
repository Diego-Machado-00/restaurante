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
    function registrar(){
        return "INSERT INTO reserva (hora,fecha,cliente_idcliente, mesa_idmesa, recepcionista_idrecepcionista,estado)
VALUES (".$this -> hora.",".$this -> fecha.",".$this ->cliente_idcliente.",".$this ->mesa_idmesa.",".$this ->recepcionista_idrecepcionista.",0) ";
    }
    function consultarTodos() {
        return "select reserva.idreserva, reserva.hora, reserva.fecha, cliente.id, mesa.idmesa, recepcionista.nombre, reserva.estado
                from reserva,cliente,mesa,recepcionista
                where cliente.idcliente =cliente_idcliente and mesa.idmesa=mesa_idmesa and recepcionista.idrecepcionista= recepcionista_idrecepcionista";
    }
    
    function buscarReserva($filtro){
        return "select idreserva, hora, fecha, cliente_idcliente, mesa_idmesa, recepcionista_idrecepcionista, estado
                from mesa
                where  fecha like '%" . $filtro . "%' or
                hora like '%" . $filtro . "%' or
                cliente_idcliente like '%". $filtro ."%'
                order by fecha";
        
    }
    
   
}


?>

