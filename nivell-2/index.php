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

echo "<h1> Exercici 2 </h1>";

function calculaCost($minuts){
    $cost = 10;
    
    if ($minuts < 3){
        return $cost;
    }

    for ($i = 1; $i <= $minuts - 3; $i++){
        $cost+=5;
    }

    return $cost;
}

//Test
echo "Cost de trucada de 2 minuts: ".calculaCost(2)."cts <br>";//Esperat 10
echo "Cost de trucada de 3 minuts: ".calculaCost(3)."cts <br>";//Esperat 10
echo "Cost de trucada de 5 minuts: ".calculaCost(5)."cts <br>";//Esperat 20
echo "Cost de trucada de 6 minuts: ".calculaCost(6)."cts <br>";//Esperat 25