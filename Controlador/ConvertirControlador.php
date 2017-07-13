<?php

require "../Factory/ConvertirFactory.php";
class ConvertirControlador {
    
    public function getConvertir($idioma,$numero){
        
        $factory = ConvertirFactory::convertir($idioma);
        
        return $factory->convertir($numero);
        
    }
    
}
