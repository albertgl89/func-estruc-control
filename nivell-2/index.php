<?php

echo "<h1> Exercici 1 </h1>";

function calculaOlimpiades($inici = 1960, $final = 2016){
    for ($i = $inici; $i <= $final; $i+=4){
        $anyActual = strval($i);
        $digitFinal = substr($anyActual, -1, 1);
        if (($digitFinal != "6")){
            echo $i.", ";
        } else if (($digitFinal == "6") && ($i != $final)){
            echo $i.", <br>";
        } else if ($i == $final){
            echo $i.".<br>";
        }  
    }
}

//Test
calculaOlimpiades();