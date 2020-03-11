<?php
<<<<<<< HEAD
require 'persistencia/FacturaDAO.php';
require_once 'persistencia/Conexion.php';

class Factura {
    private $idfactura;
    private $montoFinal;
    private $pedido_idpedido;
    private $facturaDAO;
    private $conexion;
    
    function getIdfactura(){
        return $this -> idfactura;
    }
    
    function getmontoFinal(){
        return $this -> montoFinal;
    }
    
    function getPedido(){
        return $this -> pedido_idpedido;
    }
    
    
    function Factura($idfactura="", $montoFinal="", $pedido_idpedido=""){
        $this -> idfactura = $idfactura;
        $this -> montoFinal = $montoFinal;
        $this -> pedido_idpedido = $pedido_idpedido;
        $this -> conexion = new Conexion();
        $this -> facturaDAO = new FacturaDAO($idfactura, $montoFinal, $pedido_idpedido);
    }
    
    
=======
class Factura{
    private $idfactura,$montofinal,$idpedido;
    function Factura($idfactura="",$montofinal="",$idpedido=""){
        $this -> idfactura=$idfactura;
        $this -> montofinal = $montofinal;
        $this -> idpedido = $idpedido;
    }
    
    function getIdfactura(){
        return $this -> idfactura;
            }
            
    function getMontofinal(){
                return $this ->montofinal;
            }
    function getIdpedido(){
                return $this -> idpedido;
            }
    function setIdfactura($idfactura){
                $this -> idfactura = $idfactura;
            }
            function setMontofinal($montofinal){
                $this -> montofinal = $montofinal;
            }
            function setIdfactura($idpedido){
                $this -> idpedido = $idpedido;
            }
   
>>>>>>> carpetalogica
}