<?php
class MesaDAO{
    private $idmesa,$nombre,$numpersonas;
    
    function MesaDAO($idmesa="",$nombre="",$numpersonas=""){
        $this -> idmesa = $idmesa;
        $this -> nombre = $nombre;
        $this ->numpersonas = $numpersonas;
        
    }
}