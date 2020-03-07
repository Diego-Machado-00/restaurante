<?php
class Chef extends Persona{
    private $tarjetaprofesional;
    function Chef($id="",$nombre="",$apellido="",$correo="",$clave="",$tarjetaprofesional=""){
        $this -> tarjetaprofesional = $tarjetaprofesional;
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
    }
    
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> chefDAO -> autenticar());
        if($this -> conexion -> numFilas() == 1){
            $resultado = $this -> conexion -> extraer();
            $this -> id = $resultado[0];
            $this -> conexion -> cerrar();
            return true;
        } else {
            $this -> conexion -> cerrar();
            return false;
        }
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> chefDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> id = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
        $this -> conexion -> cerrar();
    }
    function getTarjeta(){
       return $this -> tarjetaprofesional;
       
    } function setTarjeta($tarjetaprofesional){
        $this -> tarjetaprofesional=$tarjetaprofesional;
        
    }
}
?>