<?php
class MesaDAO {
    private $idmesa;
    private $nombre;
    private $numero_personas;
    
    function MesaDAO ($idmesa, $nombre, $numero_personas){
        $this -> idingrediente = $idingrediente;
        $this -> nombre = $nombre;
        $this -> numero_personas = $numero_personas;
        
    }
    
    function consultar(){
        return "select idmesa, nombre, numero_personas
                from mesa
                where idmesa = '" . $this -> idmesa . "'";
    }
    
}