<?php
$recepcionista = new Recepcionista();
$recepcionistas = $recepcionista->buscarRecepcionista($_REQUEST["fil"]);
?>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Correo</th>
		</tr>
	</thead>
	<tbody>
						<?php
    foreach ($recepcionistas as $r) {
        echo "<tr>";
        echo "<td>" . $r->getId() . "</td>";
        echo "<td>" . $r->getNombre() . "</td>";
        echo "<td>" . $r->getApellido() . "</td>";
        echo "<td>" . $r->getCorreo() . "</td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='9'>" . count($recepcionistas) . " registros encontrados</td></tr>"?>	
						</tbody>
</table>


