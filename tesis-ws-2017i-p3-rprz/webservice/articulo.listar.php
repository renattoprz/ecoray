<?php

require_once '../negocio/Articulo.clase.php';
require_once '../util/funciones/Funciones.clase.php';
require_once 'token.validar.php';




try {
    
    
        $obj = new Articulo();
       // $resultado = $obj->Listar();
        
        
        $listaArticulo = array();
        for ($i = 1; $i <=3; $i++){
        
           // $foto = $obj->obtenerFotoPaciente($resultado[$i]["dni"],$i);
             $foto = $obj->obtenerFotoPaciente("70498488",$i);
            
        
            $datosArticulo = array(
                
                "foto" => $foto
                
            );
            
            $listaArticulo[$i] = $datosArticulo;
        }
        
        Funciones::imprimeJSON(200, "", $listaArticulo);
    
    
    
} catch (Exception $exc) {
    
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}
