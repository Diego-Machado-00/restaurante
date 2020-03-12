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
			<th scope="col">Chef</th>
			<th scope="col">Categoria</th>
		</tr>
	</thead>
	<tbody>
						<?php
    foreach ($platos as $p) {
        echo "<tr>";
        echo "<td>" . $p->getIdplato() . "</td>";
        echo "<td>" . $p->getNombre() . "</td>";
        echo "<td>" . $p->getPrecio() . "</td>";
        echo "<td>" . $p->getChef() . "</td>";
        echo "<td>" . $p->getCategoria() . "</td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($platos) . " registros encontrados</td></tr>"?>	
						</tbody>
</table>

