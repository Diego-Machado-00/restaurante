<?php 
$cliente = new Cliente($_SESSION['id']);
$cliente->consultar();
include 'presentacion/cliente/menuCliente.php';
echo $idReserva= $_GET['idReserva'];
echo $idPlato = $_GET['idPlato'];
echo $descripcion = $_POST['descripcion'];
echo $cantidad = $_POST['cantidad'];
?>