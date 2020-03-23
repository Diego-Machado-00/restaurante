<?php
require 'pdf/class.ezpdf.php';
$pe = new Pedido($_GET("idPedido"));
$pe -> consultar();
$reserva = new Reserva($pe->getReserva(), "", "", "", "", "", 0);
$reserva->actualizarEstado();
$pedido_p = new Pedido_Plato($_GET("idPedido"));
$pedidos_p = $pedido_p->consultarReservaPlato();
$total=0;
$precio=0;
foreach ($pedidos_p as $p_p){
    $plato = new Plato($p_p ->getPlato());
    $plato -> consultar();
    $precio = $p_p ->getCantidad() * $plato->getPrecio();
    $total = $total + $precio;
}
$pdf =new Cezpdf('a4');
$pdf->selectFont('pdf/fonts/courier.afm');
$pdf->ezText("<b>Detalles Pedido</b>\n", 30, array("justification" => "center") );
$opciones = array('width' => '500');
$cols = array('id' => 'ID',
    'plato' => 'Plato' ,
    'cantidad' => 'Cantidad',
    'descripcion' => 'Descripcion'  
);
$i=0;

foreach($pedidos_p as $pa){
    $plato = new Plato($p_p ->getPlato());
    $plato -> consultar();
    $datos[$i]=array(
        "id" => $_GET("idPedido"),
        "plato" => $plato->getNombre(),
        "cantidad" => $pa->getCantidad(),
        "descripcion" => $pa->get_Descripcion()
    );
    $i=$i+1;
}


$pdf->ezTable($datos,$cols,"",$opciones);
$pdf->ezText("Total a pagar:".$total,10);
$pdf->ezText("\n\n\n",10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);

ob_end_clean();
$pdf->ezStream();