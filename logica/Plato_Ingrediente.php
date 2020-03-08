<?php
require 'persistencia/Plato_IngredienteDAO.php';
require_once 'persistencia/Conexion.php';

class Plato_Ingrediente{
    private $plato_idplato;
    private $ingrediente_idingrediente;
    private $Plato_IngredienteDAO;
    private $conexion;
    
    function Plato_Ingrediente($plato_idplato="", $ingrediente_idingrediente=""){
        $this -> plato_idplato = $plato_idplato;
        $this -> ingrediente_idingrediente = $ingrediente_idingrediente;
        $this -> conexion = new Conexion();
        $this -> Plato_IngredienteDAO = new Plato_IngredienteDAO($plato_idplato="", $ingrediente_idingrediente="");
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> Plato_IngredienteDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> plato_idplato = $resultado[0];
        $this -> ingrediente_idingrediente = $resultado[1];
        $this -> conexion -> cerrar();
    }
    
}