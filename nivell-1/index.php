<?php

echo "<h1> Exercici 1 </h1>";

/** 
 * Esbrina si el número és parell o imparell
 * @param int Número a analitzar
 * @return boolean True si és parell, false si és imparell
 */
function parellOImparell($numero){
    if ($numero % 2 == 0){
        return true;
    } else {
        return false;
    }
}

//Tests
echo "El número 6 és ";
echo parellOImparell(6)? "parell.<br>" : "imparell.<br>";
echo "El número 9 és ";
echo parellOImparell(9)? "parell.<br>" : "imparell.<br>";

echo "<h1> Exercici 2 </h1>";

function comptaTrampos(){
    for ($i = 1; $i < 10; $i++){
        $i++;
        if ($i == 10){
            echo $i;
        } else {
            echo $i.", ";
        } 
    }
}

//Test
comptaTrampos();