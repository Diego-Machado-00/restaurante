<?php

class IngredienteDAO {
    private $idingrediente;
    private $nombre;
    
    function IngredienteDAO ($idingrediente, $nombre){
        $this -> idingrediente = $idingrediente;
        $this -> nombre = $nombre;

    }
    
    function consultar(){
        return "select idingrediente, nombre
                from ingrediente
                where idingrediente = '" . $this -> idingrediente . "'";
    }
    
}

?>

