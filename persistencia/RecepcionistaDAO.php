<?php
class RecepcionistaDAO{
    private $id,$nombre,$apellido,$correo,$clave;
    function Recepcionista($id="",$nombre="",$apellido="",$correo="",$clave=""){
        $this -> id= $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }
    function autenticar(){
        return "select idrecepcionista from recepcionista
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    function consultar(){
        return "select idrecepcionista, nombre, apellido, correo, tarjetaprofesional from recepcionista
                where idrecepcionista = '" . $this -> id . "'";
    }
}?>