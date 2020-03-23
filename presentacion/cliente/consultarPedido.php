<?php
$cliente = new Cliente($_SESSION['id']);
$cliente->consultar();
$pedido = new Pedido("",$_SESSION['Reserva'],"","");
$pedido -> registrar();
$pedido -> consultarId();
foreach ($_SESSION['cesta'] as $r) {
    $pe_pl = new Pedido_Plato($pedido->getIdPedido(), $r['idPlato'],  $r['cantidad'],  $r['descripcion']);
    $pe_pl -> registrar();
}
$_SESSION['cesta']=[];
$_SESSION['contador']=0;
$pedido = new Pedido();
$pedidos = $pedido -> consultarTodos();
include 'presentacion/cliente/menuCliente.php';
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-12">
			<div id="resultadosMesa">
				<div class="card">
					<div class="card-header bg-secondary text-white">Pedido</div>
					<div class="card-body">
						<div id="resultadosPacientes">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Reserva</th>
										<th scope="col">Estado</th>
										<th scope="col">Servicios</th>
									</tr>
								</thead>
								<tbody>
						<?php
    foreach ($pedidos as $p) {
        echo "<tr>";
        echo "<td>" . $p->getIdPedido() . "</td>";
        echo "<td>" . $p->getReserva() . "</td>";
        echo "<td><span class='fas " . ($p->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='" . ($p->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ></span></td>";
        echo "<td>" ."<a href='indexAjax.php?pid=". base64_encode("presentacion/modalPedido.php") . "&idPedido=" . $p->getIdPedido() . "' data-toggle='modal' data-target='#modalPedido' ><span class='fas fa-eye' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='Ver Detalles' ></span> </a>";
        if($p -> getEstado()==1){
            echo "<a class='fas fa-file-pdf' href='index.php?pid=" . base64_encode("presentacion/cliente/generarPDFfactura.php") . "&idPedido=" . $p->getIdPedido() . "' data-toggle='tooltip' data-placement='left' title='PDF Factura'> </a>";
        }
        "</td>";
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

<div class="modal fade" id="modalPedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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