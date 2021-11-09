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

echo "<h1> Exercici 3 </h1>";

function calculaItems($unitats, $item){
    $preuUnitari;
    switch ($item){
        case "xocolata":
            $preuUnitari = 1.00;
            break;
        case "xiclets":
            $preuUnitari = 0.50;
            break;
        case "carmels":
            $preuUnitari = 1.50;
            break;
        default:
            return "No és un article existent a la botiga.";
            break;
    }

    return $unitats * $preuUnitari;
}

function calculaTotal($subtotals){
    $total = 0;
    foreach($subtotals as $item){
        $total += $item;
    }
    return $total;
}

//Test
$compra = [calculaItems(2, "xocolata"), calculaItems(1, "xiclets"), calculaItems(1, "carmels")];//Total esperat 4
echo "El total de la compra és ".calculaTotal($compra)."<br>";

$compra = [calculaItems(1, "xocolata"), calculaItems(4, "xiclets"), calculaItems(2, "carmels")];//Total esperat 6
echo "El total de la compra és ".calculaTotal($compra)."<br>";