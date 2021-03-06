<?php
$cliente = new Cliente();
$clientes = $cliente->buscarCliente($_REQUEST["fil"]);
?>
<div class="card">
	<div class="card-header bg-secondary text-white">Consultar Clientes</div>
	<div class="card-body">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Correo</th>
					<th scope="col">Estado</th>
					<th scope="col">Cedula</th>
					<th scope="col">Servicios</th>
				</tr>
			</thead>
			<tbody>
						<?php
    foreach ($clientes as $c) {
        echo "<tr>";
        echo "<td>" . $c->getId() . "</td>";
        echo "<td>" . $c->getNombre() . "</td>";
        echo "<td>" . $c->getApellido() . "</td>";
        echo "<td>" . $c->getCorreo() . "</td>";
        echo "<td><div id=estado" . $c->getId() . "><span class='fas " . ($c->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='" . ($c->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ></span>" . "</div></td>";
        echo "<td>" . $c->getCedula() . "</td>";
        echo "<td>" . "<a href='indexAjax.php?pid=" . base64_encode("presentacion/modalCliente.php") . "&idCliente=" . $c->getId() . "' data-toggle='modal' data-target='#modalCliente' ><span class='fas fa-eye' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='Ver Detalles' ></span> </a>
                                                   <a id='cambiarEstado" . $c->getId() . "' class='fas fa-power-off' href='#' data-toggle='tooltip' data-placement='left' title='" . ($c->getEstado() == 0 ? "Habilitar" : "Inhabilitar") . "'> </a>
                                                   </td>";
        echo "</tr>";
    }

    echo "<tr><td colspan='9'>" . count($clientes) . " registros encontrados</td></tr>"?>	
						</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" >
		<div class="modal-content" id="modalContent">
		</div>
	</div>
</div>
<script>
	$('body').on('show.bs.modal', '.modal', function (e) {
		var link = $(e.relatedTarget);
		$(this).find(".modal-content").load(link.attr("href"));
	});
</script>

<script type="text/javascript">
$(document).ready(function(){
	<?php foreach ($clientes as $c) { ?>
	$("#cambiarEstado<?php echo $c -> getId(); ?>").click(function(e){
		e.preventDefault();
		<?php echo "var ruta = \"indexAjax.php?pid=" . base64_encode("presentacion/administrador/editarEstadoClienteAjax.php") . "&idCliente=" . $c -> getId() . "&estado=" . (($c -> getEstado() == 0)?"1":"0") . "\";\n"; ?>
		$("#estado<?php echo $c -> getId(); ?>").load(ruta);
	});
	<?php } ?>
});
</script>

