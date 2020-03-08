<?php

class PlatoDAO {
    private $idplato;
    private $nombre;
    private $precio;
    private $chef_idchef;
    private $categoria_idcategoria;
    
    function PlatoDAO ($idplato, $nombre, $precio, $chef_idchef, $categoria_idcategoria){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> chef_idchef = $chef_idchef;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        
    }
    
    function consultar(){
        return "select idplato, nombre, precio, chef_idchef, categoria_idcategoria
                from plato
                where idplato = '" . $this -> idplato . "'";
    }
    
}