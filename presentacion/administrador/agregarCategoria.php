<?php
$administrador = new Administrador($_SESSION['id']);
$administrador->consultar();

if (isset($_POST["registrar"])) {
    $nombre = $_POST["nombre"];
    $categoria = new Categoria("", $nombre);
    $categoria->registrar();
}
include 'presentacion/administrador/menuAdministrador.php';
?>
<div class="container my-4">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<div class="card">
				<div class="card-header bg-secondary text-white">Registro Categoria</div>
				<div class="card-body">
						<?php
    if (isset($_POST["agregar"])) {
        ?>
						<div class="alert alert-success" role="alert">Categoria Agregada
						exitosamente.</div>						
						<?php } ?>
						<form action=<?php echo "index.php?pid=" . base64_encode("presentacion/administrador/agregarCategoria.php")?>
						method="post">
						<div class="form-group">
							<input type="text" name="nombre" class="form-control"
								placeholder="Nombre" required="required">
						</div>
						<button type="submit" name="registrar" class="btn btn-secondary">Registrar</button>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>
