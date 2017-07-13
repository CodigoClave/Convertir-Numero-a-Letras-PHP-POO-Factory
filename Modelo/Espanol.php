<?php

require "convertirINT.php";

class Espanol implements convertirINT {

    public function convertir($numero) {

        $res = "";
        $unidad = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"];
        $decenaEspecial = ["once", "donce", "trence", "catorce", "quince", "dieciseis", "diecisiete", "dieciocho", "diecinueve"];
        $decena = ["diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"];
        $centena = ["ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos"];

        if ($numero < 1000) {

            $d1 = "";
            $d2 = "";
            $d3 = "";

            $numtexto= (string)$numero;

            $d1 = substr($numtexto, 0, 1);
            $d2 = substr($numtexto, 1, 1);
            $d3 = substr($numtexto, 2, 1);

            //echo "DIGITO 01 : ${d1} <br> DIGIGITO 02 : ${d2} <br> DIGITO 03 : ${d3} <br>";

            if ($numero <= 10) {

                if ($numero < 10) {

                    $res = $unidad[$numero];
                } else {
                    $res = $decena[$d2];
                }
            } else if ($numero < 20) {

                $numero -= 11;
                $res = $decenaEspecial[$numero];
            } else if ($numero < 100) {

                if ($d2 == 0) {
                    $numero /= 10;
                    $res = $decena[$numero - 1];
                } else {

                    $res = $decena[$d1 - 1] . " y " . $unidad[$d2];
                }
            } else if ($numero < 1000) {

                if ($d2 == 0 && $d3 == 0) {

                    $res = "Cien";
                } else if ($d3 == 0) {

                    $res = $centena[$d1 - 1] . " " . $decena[$d2 - 1];
                } else if ($d2 == 0) {

                    $res = $centena[$d1 - 1] . " " . $unidad[$d3];
                } else {

                    $res = $centena[$d1 - 1] . " " . $decena[$d2 - 1] . " y " . $unidad[$d3];
                }
            }
        } else {
            $res = "MIL";
        }




        return $res;
    }

}
