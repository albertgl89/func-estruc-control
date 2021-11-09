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

echo "<br>";
echo "<h1> Exercici 3 </h1>";

function comptaTramposParam($numero){
    for ($i = 1; $i < $numero; $i++){
        $i++;
        if ($i == $numero || $i == $numero-1){
            echo $i;
        } else {
            echo $i.", ";
        } 
    }
}

//Test
comptaTramposParam(20);

echo "<br>";
echo "<h1> Exercici 4 </h1>";

function comptaTramposParamDef($numero = 10){
    for ($i = 1; $i < $numero; $i++){
        $i++;
        if ($i == $numero || $i == $numero-1){
            echo $i;
        } else {
            echo $i.", ";
        } 
    }
}

//Test
comptaTramposParamDef();

echo "<br>";
echo "<h1> Exercici 5 </h1>";

function calculaDivisio($nota){
    if ($nota >= 60){
        return "Primera Divisió";
    } else if ($nota >= 45 && $nota <= 59){
        return "Segona Divisió";
    } else if ($nota >= 33 && $nota <= 44){
        return "Tercera Divisió";
    } else {
        return "Reprovar";
    }
}

//Test
echo calculaDivisio(65)."<br>";//Esperat: "Primera Divisió" x2
echo calculaDivisio(60)."<br>";
echo calculaDivisio(45)."<br>";//Esperat "Segona Divisió" x3
echo calculaDivisio(53)."<br>";
echo calculaDivisio(59)."<br>";
echo calculaDivisio(33)."<br>";//Esperat "Tercera Divisió" x3
echo calculaDivisio(44)."<br>";
echo calculaDivisio(38)."<br>";
echo calculaDivisio(32)."<br>";//Esperat "Reprovar" x2
echo calculaDivisio(25)."<br>";

echo "<h1> Exercici 6 </h1>";

function isBitten(){
    $mossega = rand(0,1);
    return $mossega == 0?  false : true;
}

//Test
echo isBitten()? "No mossegat. <br>" : "Mossegat! <br>";
echo isBitten()? "No mossegat. <br>" : "Mossegat! <br>";
echo isBitten()? "No mossegat. <br>" : "Mossegat! <br>";
echo isBitten()? "No mossegat. <br>" : "Mossegat! <br>";