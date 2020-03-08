<?php
class RecepcionistaDAO {
    private $idrecepcionista;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    
    function RecepcionistaDAO($idrecepcionista = "", $nombre = "", $apellido = "", $correo = "", $clave = ""){
        $this->idrecepcionista = $idrecepcionista;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
    }
    
    function autenticar(){
        return "select idrecepcionista from recepcionista
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    function registrar(){
        return "insert into recepcionista
                (nombre, apellido, correo, clave)
                values ('" . $this->nombre . "', '" . $this->apellido . "', '" . $this->correo . "', md5('" . $this->clave . "'))";
    }
    
    function consultar() {
        return "select nombre, apellido, correo
                from recepcionista
                where idrecepcionista =" . $this -> idrecepcionista;
    }
    
    function existeCorreo(){
        return "select idrecepcionista from recepcionista
                where correo = '" . $this->correo . "'";
    }
    
    function consultarTodos(){
        return "select idrecepcionista,nombre, apellido, correo
                from recepcionista
                order by apellido";
    }
}