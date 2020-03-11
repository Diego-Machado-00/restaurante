<?php
<<<<<<< HEAD
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

=======
class ReservaDAO{
    private $idreserva,$hora,$fecha,$idcliente,$idmesa,$idrecepcionista,$estado;
    function ReservaDAO($idreserva="",$hora="",$fecha="",$idcliente="",$idmesa="",$idrecepcionista="",$estado=""){
        $this -> idreserva = $idreserva;
        $this -> hora = $hora;
        $this -> $idcliente = $idcliente;
        $this -> idmesa = $idmesa;
        $this -> idrecepcionista = $idrecepcionista;
        $this -> estado = $estado;
        
    }
    
}
?>
>>>>>>> carpetalogica
