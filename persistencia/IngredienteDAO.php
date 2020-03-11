<?php
<<<<<<< HEAD
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
=======
class IngredienteDAO{
    private  $idingrediente,$nombre;
    function IngredienteDAO($idingrediente="",$nombre=""){
        $this -> idingrediente = $idingrediente;
        $this -> nombre = $nombre;
    }

    
    
}
?>
>>>>>>> carpetalogica
