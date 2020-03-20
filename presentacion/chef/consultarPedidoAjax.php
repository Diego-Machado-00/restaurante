<?php
$pedido = new Pedido();
$pedidos = $pedido->buscarPedido($_REQUEST["fil"]);
?>

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
    foreach ($pedidos  as $p) {
        echo "<tr>";
        echo "<td>" . $p . "</td>";
        echo "<td>" . $p-> getIdPedido() . "</td>";
        echo "<td>" . $p-> getDescripcion() . "</td>";
        echo "<td>" . $p-> getReserva() . "</td>";
        echo "<td><span class='fas " . ($p->getEstado() == 0 ? "fa-times-circle" : "fa-check-circle") . "'  id='cambiarEstado" . $p->getIdPedido() . "' data-toggle='tooltip' class='tooltipLink' data-placement='left' data-original-title='" . ($p->getEstado() == 0 ? "Inhabilitado" : "Habilitado") . "' ></span></td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($pedidos) . " registros encontrados</td></tr>"?>	
						</tbody>
</table>