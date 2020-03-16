<?php
require 'logica/Persona.php';
require 'logica/Administrador.php';
require 'logica/Recepcionista.php';
require 'logica/Cliente.php';
require 'logica/Categoria.php';
require 'logica/Chef.php';
require 'logica/Factura.php';
require 'logica/Ingrediente.php';
require 'logica/Mesa.php';
require 'logica/Pedido.php';
require 'logica/Plato.php';
require 'logica/Reserva.php';
$pid = base64_decode($_GET["pid"]);
include $pid;
?>