<?php
class ClienteDAO{
    private $id="", $nombre="", $apellido="", $correo="", $clave="";
  
    function ClienteDAO($id="", $nombre="", $apellido="", $correo="", $clave=""){
        $this -> id =$id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }
    function autenticar(){
        return "select idcliente from cliente
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    function consultar(){
        return "select idcliente, nombre, apellido, correo from cliente
                where idchef = '" . $this -> id . "'";
    }
}
?>