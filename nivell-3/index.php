<?php

echo "<h1> Exercici 1 </h1>";

function cribaEratostenes($numero){
    $arr = [];
    for ($i = 2; $i <= $numero; $i++){//Afegeix tots els números a partir del 2
        array_push($arr,$i);
    }

    foreach($arr as $num){//Recorrem tots els elements, un a un
        if (($num == 2 || $num * $num < 20)){//Si el número és el 2, el primer de la llista, o el seu quadrat inferior a 20
           
            for ($i = 0; $i < count($arr); $i++){//Recorre tot l'array cercant múltiples del número actual
                if ($arr[$i] == $num || $arr[$i] == ""){
                    //Salta ja que és el mateix número o bé un element que ja no és un número
                } else if ($arr[$i] % $num == 0 && $arr[$i] != "") {//Si el trobes, canvia'l a string buida
                    $arr[$i] = "";
                }
            }
            
            foreach($arr as $item){//Recorre array per eliminar els elements d'string buida,
                if ($item == ""){
                    $index = array_search($item, $arr);
                    unset($arr[$index]);
                }
            }
            array_splice($arr, count($arr));// i reformula índexs d'array
        } 
    }
    return $arr;//Retorna el resultat de nombres primers trobats quan la primera condició ja no es compleix
}

print_r(cribaEratostenes(20));//Test. Esperat 2, 3, 5, 7, 11, 13, 17, 19
echo "<br>";
print_r(cribaEratostenes(159));