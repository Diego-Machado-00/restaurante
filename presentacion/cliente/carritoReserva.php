<?php 
$cliente = new Cliente($_SESSION['id']);
$cliente->consultar();
if(isset($_GET['idPlato'])){
    $plato = new Plato($_GET['idPlato']);
    $plato -> consultar();
    $_SESSION['Reserva']= $_GET['idReserva'];
    $_SESSION['cesta'][]= array(
            'idCesta' => $_SESSION['contador'],
            'idPlato'    => $_GET['idPlato'],
            'idReserva'  => $_GET['idReserva'],
            'descripcion'  => $_POST['descripcion'],
            'cantidad' => $_POST['cantidad']  
    );
    $_SESSION['contador']=$_SESSION['contador']+1;
}
include 'presentacion/cliente/menuCliente.php';
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-12">
			<div id="resultadosMesa">
				<div class="card">
					<div class="card-header bg-secondary text-white">
				<div class="d-flex justify-content-between">
    					<div><h4>Carrito de Compras</h4></div>
    					<div>
    					<?php if($_SESSION['cesta']!= NULL){?>
    					<form action="index.php?pid=<?php echo base64_encode("presentacion/cliente/consultarPedido.php")?>" method="post">
							<button type="submit" name="RegistroPedido" class="btn btn-light">Solicitar Pedido</button>
						</form>	
						<?php }?>
    					</div>
    					</div>
				</div>
					<div class="card-body">
						<div id="resultadosPacientes">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Plato</th>
										<th scope="col">Cantidad</th>
										<th scope="col">Descripcion</th>
										<th scope="col">Reserva</th>
										<th scope="col">servicos</th>
									</tr>
								</thead>
								<tbody>
						<?php
						if($_SESSION['cesta']!= NULL){
						    foreach ($_SESSION['cesta'] as $r) {
						        echo "<tr>";
						        $plato = new Plato($r['idPlato']);
						        $plato -> consultar();
						        echo "<td>" . $plato -> getNombre() . "</td>";
						        echo "<td>" . $r['cantidad'] . "</td>";
						        echo "<td>" . $r['descripcion'] . "</td>";
						        echo "<td>" . $r['idReserva'] . "</td>";
						        echo "<td>" ."<a id='EliminarCesta" . $r['idCesta'] . "' class='fas fa-trash-alt'  href='#' data-toggle='tooltip' data-placement='left' title='Eliminar'></a></td>";
						        echo "</tr>";
						    }
						}
    echo "<tr><td colspan='9'>" . count($_SESSION['cesta']) . " registros encontrados</td></tr>"?>	
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
	<?php foreach ($_SESSION['cesta'] as $r) { ?>
	$("#EliminarCesta<?php echo $r['idCesta']; ?>").click(function(){
		<?php 
		echo "hola";
		/* $_SESSION['cesta'][$r['idCesta']]=[]; */
		?>
	});
	<?php } ?>
});
</script>
