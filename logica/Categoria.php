<?php
class Categoria{
    private $idcategoria,$nombre;
    
    function Categoria($idcategoria="",$nombre=""){
        $this -> idcategoria = $idcategoria;
        $this -> nombre = $nombre;
    }
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
}
?>