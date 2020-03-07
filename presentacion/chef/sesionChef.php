<?php
$chef = new Chef($_SESSION['id']);
$chef->consultar();
include 'presentacion/menuChef.php';
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-primary text-white">Bienvenido Administrador</div>
				<div class="card-body">
					<p>Usuario: <?php echo $chef -> getNombre() . " " . $chef -> getApellido() ?></p>
					<p>Correo: <?php echo $chef -> getCorreo(); ?></p>
					<p>Hoy es: <?php echo date("d-M-Y"); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>