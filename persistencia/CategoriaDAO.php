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
    
}
