<?php
$plato = new Plato();
$platos = $plato->buscarPlato($_REQUEST["fil"]);
?>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Precio</th>
			<th scope="col">Foto</th>
			<th scope="col">Agregar Plato al Carrito</th>
		</tr>
	</thead>
	<tbody>
						<?php
    foreach ($platos as $p) {
        echo "<tr>";
        echo "<td>" . $p->getIdplato() . "</td>";
        echo "<td>" . $p->getNombre() . "</td>";
        echo "<td>" . $p->getPrecio() . "</td>";
        echo "<td>" . (($p->getFoto() != "") ? "<img src='/restaurante/fotos/" . $p->getFoto() . "' height='50px'>" : "") . "</td>";
        echo "<td>" ."<a class='fas fa-cart-arrow-down' href='index.php?pid=" . base64_encode("presentacion/cliente/agregarPedido.php") . "&idPlato=" . $p->getIdplato() . "&idReserva=". $_GET['idReserva']."' data-toggle='tooltip' data-placement='left' title='Reservar'> </a></td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($platos) . " registros encontrados</td></tr>"?>	
						</tbody>
</table>

