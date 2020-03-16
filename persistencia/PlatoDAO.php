<?php


class PlatoDAO {
    private $idplato;
    private $nombre;
    private $precio;
    private $categoria_idcategoria;
    private $foto;
    
    function PlatoDAO ($idplato, $nombre, $precio, $categoria_idcategoria, $foto){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        $this -> foto = $foto;
    }
    
    function buscarPlato($filtro){
        return "select idplato, nombre, precio, categoria_idcategoria, foto
                from plato
                where  nombre like '%" . $filtro . "%'";
        
    }
    
    function consultarTodos(){
        return "select plato.idplato, plato.nombre, plato.precio, categoria.nombre, plato.foto
                from plato, categoria
                where categoria.idcategoria=categoria_idcategoria;";
    }
    
    function consultar(){
        return "select idplato, nombre, precio, categoria_idcategoria, foto
                from plato
                where idplato = '" . $this -> idplato . "' ;";
    }
    
    function registrar(){
        return "insert into plato (nombre,precio,categoria_idcategoria, foto)
                value ('". $this -> nombre ."', ". $this -> precio.", ". $this->categoria_idcategoria.", '". $this-> foto."')";
        
    }
    
}

?>

