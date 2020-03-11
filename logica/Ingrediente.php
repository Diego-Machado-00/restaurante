<?php
<<<<<<< HEAD
require 'persistencia/IngredienteDAO.php';
require_once 'persistencia/Conexion.php';

class Ingrediente{
    private $idingrediente;
    private $nombre;
    private $ingredienteDAO;
    private $conexion;
    
    function getIdingrediente(){
        return $this -> idingrediente;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    
    function Ingrediente($idingrediente="", $nombre=""){
        $this -> idcategoria = $idingrediente;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> ingredienteDAO = new IngredienteDAO($idingrediente, $nombre);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> ingredienteDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idcategoria = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> conexion -> cerrar();
    }
    
}
=======
class Ingrediente{
  private  $idingrediente,$nombre;
  function Ingrediente($idingrediente="",$nombre=""){
      $this -> idingrediente = $idingrediente;
      $this -> nombre = $nombre;
  }
  public function getIdingrediente()
    {
        return $this->idingrediente;
    }

public function getNombre()
    {
        return $this->nombre;
    }

public function setIdingrediente($idingrediente)
    {
        $this->idingrediente = $idingrediente;
    }

public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


  
  
}

?>
>>>>>>> carpetalogica
