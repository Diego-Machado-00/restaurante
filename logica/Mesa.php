<?php
class Mesa{
   private $idmesa,$nombre,$numpersonas;

    function Mesa($idmesa="",$nombre="",$numpersonas=""){
        $this -> idmesa = $idmesa;
        $this -> nombre = $nombre;
        $this ->numpersonas = $numpersonas;
        
    }
    public function getIdmesa()
    {
        return $this->idmesa;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getNumpersonas()
    {
        return $this->numpersonas;
    }
    
    public function setIdmesa($idmesa)
    {
        $this->idmesa = $idmesa;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setNumpersonas($numpersonas)
    {
        $this->numpersonas = $numpersonas;
    }
    
}