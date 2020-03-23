<?php
$chef = new Chef($_SESSION['id']);
$chef->consultar();
$pedido = new Pedido();
$pedidos = $pedido->consultarTodos();
include 'presentacion/chef/menuChef.php';
?>
<div class="container mt-4">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
		<input id="Filtro" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		</div>
	</div>
</div>

<div class="container mt-4">
	<div class="row">
		<div class="col-12">
			<div id="resultadosPedido">
			<div class="card">
					<div class="card-header bg-secondary text-white">Consultar Pedido</div>
					<div class="card-body">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Reserva</th>
										<th scope="col">Estado</th>
										<th scope="col">Seleccionar</th>
									</tr>
								</thead>
								<tbody>
						<?php
						foreach ($pedidos as $p) {
        echo "<tr>";
        echo "<td>" . $p-> getIdPedido() . "</td>";
        echo "<td>" . $p-> getReserva() . "</td>";
        echo "<td><span class='fas " . ($p->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "'   id='Estado" . $p->getIdPedido() . "'  data-toggle='tooltip'  class='tooltipLink' data-placement='left' data-original-title='" . ($p->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ></span></td>";
        echo "<td>" . " <a id='cambiarEstado" . $p->getIdPedido() . "' class='fas fa-power-off' href='#' data-toggle='tooltip' data-placement='left' title='" . ($p->getEstado() == 0 ? "Habilitar" : "Inhabilitar") . "'> </a> </td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($pedidos) . " registros encontrados</td></tr>"?>	
						</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#Filtro").keyup(function(){
	     var fil = $("#Filtro").val();
	     console.log(fil);
	     if(fil.length>=1){
		     <?php echo "var ruta = \"indexAjax.php?pid=". base64_encode("presentacion/chef/consultarPedidoAjax.php")."\";\n";?>
			 $("#resultadosPedido").load(ruta,{fil});
	     }
	
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	<?php foreach ($pedidos as $p) { ?>
	$("#cambiarEstado<?php echo $p -> getIdPedido(); ?>").click(function(){
		<?php echo "var ruta = \"indexAjax.php?pid=" . base64_encode("presentacion/chef/editarEstadoPedidoAjax.php") . "&idPedido=" . $p -> getIdPedido() . "&estado=" . (($p -> getEstado() == 0)?"1":"0") . "&chef=".$chef->getId()."\";\n"; ?>
		$("#Estado<?php echo $p ->getIdPedido(); ?>").load(ruta);
	});
	<?php } ?>
});
</script>