<?php
class Reserva{
    private $idreserva,$hora,$fecha,$idcliente,$idmesa,$idrecepcionista,$estado;
    function Reserva($idreserva="",$hora="",$fecha="",$idcliente="",$idmesa="",$idrecepcionista="",$estado=""){
        $this -> idreserva = $idreserva;
        $this -> hora = $hora;
        $this -> $idcliente = $idcliente;
        $this -> idmesa = $idmesa;
        $this -> idrecepcionista = $idrecepcionista;
        $this -> estado = $estado;
        
    }
  
    public function getIdreserva()
    {
        return $this->idreserva;
    }


    public function getHora()
    {
        return $this->hora;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

 
    public function getIdcliente()
    {
        return $this->idcliente;
    }

   
    public function getIdmesa()
    {
        return $this->idmesa;
    }

   
    public function getIdrecepcionista()
    {
        return $this->idrecepcionista;
    }

   
    public function getEstado()
    {
        return $this->estado;
    }

    
    public function setIdreserva($idreserva)
    {
        $this->idreserva = $idreserva;
    }

   
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

  
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    public function setIdmesa($idmesa)
    {
        $this->idmesa = $idmesa;
    }

   
    public function setIdrecepcionista($idrecepcionista)
    {
        $this->idrecepcionista = $idrecepcionista;
    }

   
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

}
?>