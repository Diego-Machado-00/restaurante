<?php

class CategoriaDAO {
    private $idcategoria;
    private $nombre;
    
    function CategoriaDAO ($idcategoria, $nombre){
        $this -> idcategoria = $idcategoria;
        $this -> nombre = $nombre;
    }
    
    function consultar(){
        return "select idcategoria, nombre
                from categoria
                where idcategoria = '" . $this -> idcategoria . "'";
    }
    
    function registrar(){
        return "insert into categoria (nombre) 
                value ('". $this -> nombre ."')";
                
    }
    
    function consultarTodos(){
        return "select idcategoria, nombre
                from categoria";
        
    }
    
}

