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
			<div id="resultadosReserva">
			<div class="card">
					<div class="card-header bg-secondary text-white">Consultar Pedido</div>
					<div class="card-body">
						<div id="resultadosReserva">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Descripcion</th>
										<th scope="col">Reserva</th>
										<th scope="col">Estado</th>
									
									</tr>
								</thead>
								<tbody>
						<?php
						foreach ($pedidos as $p) {
        echo "<tr>";
        $p ->consultar();
        echo "<td>" . $p-> getIdPedido() . "</td>";
        echo "<td>" . $p-> getDescripcion() . "</td>";
        echo "<td>" . $p-> getReserva() . "</td>";
        echo "<td><span  id='cambiarEstado" . $p->getIdPedido() . "'  data-toggle='tooltip'  class='tooltipLink' data-placement='left' data-original-title='" . ($p->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ><button  class='fas " . ($p->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "' href='#'></button></span></td>";
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
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#Filtro").keyup(function(){
	     var fil = $("#Filtro").val();
	     console.log(fil);
	     if(fil.length>=1){
		     <?php echo "var ruta = \"indexAjax.php?pid=". base64_encode("presentacion/chef/consultarPedidoAjax.php")."\";\n";?>
			 $("#resultadosReserva").load(ruta,{fil});
	     }else{
		     //$("#resultadosPaciente").html("<tbody><tr><td colspan='9'>0 registros encontrados</td></tr></tbody>");
	    	 $("#resultadosRecepcionista").empty();
	     }
	
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	<?php foreach ($pedidos as $p) { ?>
	$("#cambiarEstado<?php echo $p -> getIdPedido(); ?>").click(function(e){
		e.preventDefault();
		<?php echo "var ruta = \"indexAjax.php?pid=" . base64_encode("presentacion/chef/editarEstadoPedidoAjax.php") . "&idPedido=" . $p -> getIdPedido() . "&estado=" . (($p -> getEstado() == 0)?"1":"0") . "\";\n"; ?>
		$("#cambiarEstado<?php echo $p ->getIdPedido(); ?>").load(ruta);
	});
	<?php } ?>
});
</script>