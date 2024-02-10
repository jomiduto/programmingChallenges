<?php

/*
 * Crea una única función (importante que sólo sea una) que sea capaz
 * de calcular y retornar el área de un polígono.
 * - La función recibirá por parámetro sólo UN polígono a la vez.
 * - Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
 * - Imprime el cálculo del área de un polígono de cada tipo.
*/

// triangulo = base*altura/2
// cuadrado = lado*lado
// rectagulo = base*altura

$opc = readline("¿Qué área deseas calcular?:\n1. Triangulo\n2. Cuadrado\n3. Rectangulo\n");

function areaPolygon($base, $height, $opc){
    switch ($opc) {
        case 1:
            $areaTriangle = ($base * $height) / 2;
            echo "El área del triangulo es: $areaTriangle";
            break;
        case 2:
            $areaSquare = ($base * $base);
            echo "El área del cuadrado es: $areaSquare";
            break;
        case 3:
            $areaRectangle = ($base * $height);
            echo "El área del rectangulo es: $areaRectangle";
            break;
        default:
            echo "Opción invalida";
            break;
    }
}

echo areaPolygon(5, 6, $opc);