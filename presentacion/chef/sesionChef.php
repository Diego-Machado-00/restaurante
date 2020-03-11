<?php
$chef = new Chef($_SESSION['id']);
$chef->consultar();
<<<<<<< HEAD
include 'presentacion/chef/menuChef.php';
?>
<div class="container mt-4">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-dark text-white">Bienvenido Chef</div>
=======
include 'presentacion/menuChef.php';
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-primary text-white">Bienvenido Administrador</div>
>>>>>>> carpetalogica
				<div class="card-body">
					<p>Usuario: <?php echo $chef -> getNombre() . " " . $chef -> getApellido() ?></p>
					<p>Correo: <?php echo $chef -> getCorreo(); ?></p>
					<p>Hoy es: <?php echo date("d-M-Y"); ?></p>
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> carpetalogica
