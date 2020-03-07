<?php
$recepcionista = new Recepcionista($_SESSION['id']);
$recepcionista->consultar();
include 'presentacion/menuRecepcionista.php';
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-primary text-white">Bienvenido Recepcionista</div>
				<div class="card-body">
					<p>Usuario: <?php echo $recepcionista -> getNombre() . " " . $recepcionista -> getApellido() ?></p>
					<p>Correo: <?php echo $recepcionista -> getCorreo(); ?></p>
					<p>Hoy es: <?php echo date("d-M-Y"); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
