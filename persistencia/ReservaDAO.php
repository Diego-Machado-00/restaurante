<?php
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