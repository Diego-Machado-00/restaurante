<?php
class ClienteDAO {
    private $idcliente;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    
    function ClienteDAO($idcliente , $nombre , $apellido , $correo , $clave , $estado, $cedula){
        $this->idcliente = $idcliente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->estado = $estado;
        $this->cedula = $cedula;
    }
    
    function autenticar(){
        return "select idcliente from cliente
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    function existeCorreo(){
        return "select idcliente from cliente, recepcionista, chef
                where cliente.correo = '" . $this->correo . "' or 
                recepcionista.correo = '". $this->correo. "' or 
                chef.correo = '". $this-> correo ."'";
    }
    
    function registrar(){
        return "insert into cliente
                (nombre, apellido, correo, clave, estado, cedula)
                values ('" . $this->nombre . "', '" . $this->apellido . "', '" . $this->correo . "', md5('" . $this->clave . "'), '". $this->estado ."', '". $this->cedula ."')";
    }
    
    function consultar() {
        return "select nombre, apellido, correo, estado, cedula 
                from cliente
                where idcliente =" . $this -> idcliente;
    }
    
    function consultarTodos(){
        return "select idcliente,nombre, apellido, correo, estado, cedula
                from cliente
                order by apellido";
    }
}
