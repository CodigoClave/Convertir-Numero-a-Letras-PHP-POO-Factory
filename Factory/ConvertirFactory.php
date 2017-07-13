<?php
require "../Modelo/Espanol.php";
class ConvertirFactory {
   
    public static function convertir($idioma){
        
        $obj=null;
        
        if($idioma=="es"):
            
            $obj = new Espanol();
            
        endif;
        
        return $obj;
        
    }
    
}
