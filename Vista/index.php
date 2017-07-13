<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CONVERTIR</title>
    </head>
    <body>

        <h3>CONVERTIR NUMERO A LETRAS</h3>

        <form action="" method="post">
            <input type="number" name="txtnumero" placeholder="Numero" min="0" max="1000"/>
            <select name="idioma" id="">
                <option value="es">seleccione Idioma (español)</option>
                <option value="es">Español</option>
                <option value="en">Ingles</option>
                <option value="it">Italiano</option>
            </select>
            <button name="mibtn">Dame Click !</button>
        </form>

        <?php
        
        require "../Controlador/ConvertirControlador.php";
        extract($_POST);
        //$_POST["txtnumero"];

        if (isset($mibtn)):
            $controlador = new ConvertirControlador();
            $resultado=$controlador->getConvertir($idioma, $txtnumero);
            
            echo $resultado;
            
            
        endif;
        
        ?>

    </body>
</html>
