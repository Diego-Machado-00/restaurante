<?php
$reserva = new Reserva($_GET['idReserva'],"", "",$_GET['cl'], $_GET[''], $_SESSION['id'],"" );
$reserva->actualizarEstado();
echo "<span class='fas " . ($reserva->getEstado()==0?"fa-times-circle":"fa-check-circle") . "' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='" . ($reserva->getEstado()==0?"Inhabilitado":"Habilitado") . "' ></span>";