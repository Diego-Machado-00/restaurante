<?php
class Plato_IngredienteDAO {
    private $plato_idplato;
    private $ingrediente_idingrediente;
    
    function Plato_IngredienteDAO ($plato_idplato, $ingrediente_idingrediente){
        $this -> plato_idplato = $plato_idplato;
        $this -> ingrediente_idingrediente = $ingrediente_idingrediente;
        
    }
    
    function consultar(){
        return "select plato_idplato, ingrediente_idingrediente
                from pedido_ingrediente
                where ingrediente_idingrediente = '" . $this -> ingrediente_idingrediente . "' and plato_idplato = '". $this -> plato_idplato ."'";
    }
    
}