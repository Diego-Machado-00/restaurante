<?php
<<<<<<< HEAD
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
    
    function getIdreserva(){
        return $this -> idreserva;
    }
    
    function getHora(){
        return $this -> hora;
    }
    
    function getFecha(){
        return $this -> fecha;
    }
    
    function getCliente(){
        return $this -> cliente_idcliente;
    }
    
    function getMesa(){
        return $this -> mesa_idmesa;
    }
    
    function getRecepcionista(){
        return $this -> recepcionista_idrecepcionista;
    }
    
    function getEstado(){
        return $this -> estado;
    }
    
    
    function Administrador($idreserva="", $hora="", $fecha="", $cliente_idcliente="", $mesa_idmesa="", $recepcionista_idrecepcionista="" , $estado="" ){
        $this -> idreserva = $idreserva;
        $this -> hora = $hora;
        $this -> fecha = $fecha;
        $this -> cliente_idcliente = $cliente_idcliente;
        $this -> recepcionista_idrecepcionista = $recepcionista_idrecepcionista;
        $this -> estado = $estado;
        $this -> conexion = new Conexion();
        $this -> reservaDAO = new ReservaDAO($idreserva, $hora, $fecha, $cliente_idcliente, $mesa_idmesa, $recepcionista_idrecepcionista, $estado);
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
=======
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
>>>>>>> carpetalogica
