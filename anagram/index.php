<?php

/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
*/

function isAnagram($word1, $word2){
    if($word1 == $word2){
        echo "Las palabras son iguales";
        return false;
    }elseif (strlen($word1) == strlen($word2)) {
        $array_w1 = str_split($word1);
        $array_w2 = str_split($word2); 
        $success = 0;

        for ($x = 0; $x < count($array_w1); $x++) {
            if (in_array($array_w1[$x], $array_w2)) {
                $pos = array_search($array_w1[$x], $array_w2);
                unset($array_w2[$pos]);
                $success++;
            }
        }
        if ($success == count($array_w1)) {
            echo "¡Es un anagrama!";
            return true;
        }else {
            echo "Lo siento, las palabras no forman un anagrama";
            return false;
        }
    }
    else{
        echo "Lo siento, las palabras no forman un anagrama";
    }
}

echo isAnagram("cara", "arca");