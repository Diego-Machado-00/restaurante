<?php
$recepcionista = new Recepcionista($_SESSION['id']);
$recepcionista->consultar();
$reserva = new Reserva();
$reservas = $reserva->consultarTodos();
include 'presentacion/recepcionista/menuRecepcionista.php';
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
					<div class="card-header bg-secondary text-white">Consultar Reserva</div>
					<div class="card-body">
						<div id="resultadosReserva">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Hora</th>
										<th scope="col">Fecha</th>
										<th scope="col">Cliente</th>
										<th scope="col">Mesa</th>
										<th scope="col">Recepcionista</th>
										<th scope="col">Estado</th>
									</tr>
								</thead>
								<tbody>
						<?php
						foreach ($reservas as $r) {
        echo "<tr>";
        echo "<td>" . $r-> getIdreserva() . "</td>";
        echo "<td>" . $r-> getHora() . "</td>";
        echo "<td>" . $r-> getFecha() . "</td>";
        echo "<td>" . $r-> getCliente() . "</td>";
        echo "<td>" . $r-> getMesa(). "</td>";
        echo "<td>" . $r-> getRecepcionista() . "</td>";
        echo "<td><span class='fas " . ($r->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "'  id='cambiarEstado" . $r->getId() . "' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='" . ($r->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ></span></td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($reservas) . " registros encontrados</td></tr>"?>	
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
		     <?php echo "var ruta = \"indexAjax.php?pid=". base64_encode("presentacion/recepcionista/consultarReservaAjax.php")."\";\n";?>
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
	<?php foreach ($reservas as $r) { ?>
	$("#cambiarEstado<?php echo $r -> getId(); ?>").click(function(e){
		e.preventDefault();
		<?php echo "var ruta = \"indexAjax.php?pid=" . base64_encode("presentacion/recepcionista/editarEstadoReservaAjax.php") . "&idReserva=" . $r -> getId() . "&estado=" . (($r -> getEstado() == 0)?"1":"0") . "&cl=".$r ->getCliente()."\";\n"; ?>
		$("#estado<?php echo $r -> getId(); ?>").load(ruta);
	});
	<?php } ?>
});
</script>