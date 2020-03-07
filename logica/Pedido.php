<?php

class Pedido{
    private $idpedido,$descripcion,$idreserva,$cantidad;
    
    function Pedido($idpedido="",$descripcion="",$idreserva="",$cantidad=""){
        $this -> idpedido= $idpedido;
        $this -> descripcion = $descripcion;
        $this -> idreserva = $idreserva;
        $this -> cantidad = $cantidad;
    }
    
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdreserva()
    {
        return $this->idreserva;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setIdpedido($idpedido)
    {
        $this->idpedido = $idpedido;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdreserva($idreserva)
    {
        $this->idreserva = $idreserva;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

  
}?>