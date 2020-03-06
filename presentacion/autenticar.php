<?php
// require 'logica/Persona.php';
// require 'logica/Administrador.php';
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$administrador = new Administrador("", "", "", $correo, $clave);
if($administrador -> autenticar()){
    $_SESSION['id'] = $administrador -> getId();    
    header("Location: index.php?pid=" . base64_encode("presentacion/administrador/sesionAdministrador.php"));
}else{
    $cliente = new Cliente("", "", "", $correo, $clave);
    if($cliente -> autenticar()){
        $_SESSION['id'] = $cliente -> getId();
        header("Location: index.php?pid=" . base64_encode("presentacion/profesor/sesionProfesor.php"));
    }else{
        $recepcionista = new Recepcionista("", "", "", $correo, $clave);
        if($recepcionista -> autenticar()){
            $_SESSION['id'] = $recepcionista -> getId();
            header("Location: index.php?pid=" . base64_encode("presentacion/estudiante/sesionEstudiante.php"));
        }else{
            $chef = new Chef("", "", "", $correo, $clave);
            if($chef -> autenticar()){
                $_SESSION['id'] = $chef -> getId();
                header("Location: index.php?pid=" . base64_encode("presentacion/estudiante/sesionEstudiante.php"));
            }
        }
    }
}
?>