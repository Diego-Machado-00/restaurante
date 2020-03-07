<?php
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