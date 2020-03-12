<?php


class PlatoDAO {
    private $idplato;
    private $nombre;
    private $precio;
    private $categoria_idcategoria;
    
    function PlatoDAO ($idplato, $nombre, $precio, $categoria_idcategoria){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        
    }
    
    function buscarPlato($filtro){
        return "select idplato, nombre, precio, categoria_idcategoria
                from plato
                where  nombre like '%" . $filtro . "%'";
        
    }
    
    function consultarTodos(){
        return "select plato.idplato, plato.nombre, plato.precio, categoria.nombre
                from plato, categoria
                where categoria.idcategoria=categoria_idcategoria;";
    }
    
    function consultar(){
        return "select idplato, nombre, precio, categoria_idcategoria
                from plato
                where idplato = '" . $this -> idplato . "' ;";
    }
    
}

?>

