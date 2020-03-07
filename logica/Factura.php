<?php
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
   
}