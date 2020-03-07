<?php
class PlatoDAO{
    private $idplato,$nombre,$precio,$idchef,$idcategoria;
    function Plato($idplato="",$nombre="",$precio="",$idchef="",$idcategoria=""){
        $this -> idplato =  $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this ->idchef = $idchef;
        $this -> idcategoria = $idcategoria;
    }
}
?>