<?php
class ChefDAO{
    private $id="",$nombre="",$apellido="",$correo="",$clave="",$tarjetaprofesional="";

    function ChefDAO($id="",$nombre="",$apellido="",$correo="",$clave="",$tarjetaprofesional=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> tarjetaprofesional = $tarjetaprofesional;
    }
    
    function autenticar(){
        return "select idchef from chef
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    function consultar(){
        return "select idchef, nombre, apellido, correo, tarjetaprofesional from chef
                where idchef = '" . $this -> id . "'";
    }
}