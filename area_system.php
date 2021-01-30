<?php


// area system


function area(int $value1, int $value2 = 0){

    $pi = 3.1416;
    $areaOfCircle = $pi * $value1 * $value1;
    $areaOfTriangle = (1/2) * $value1 * $value2;
    $areaOfSquare = $value1 * $value1;
    $areaOfRectengle = $value1 * $value2;

    echo "Area Of Circle = " . $areaOfCircle . "<br>";
    echo "Area Of Triangle = " . $areaOfTriangle . "<br>";
    echo "Area Of Square = " . $areaOfSquare . "<br>";
    echo "Area Of Rectengle = " . $areaOfRectengle . "<br>";

}

area(5, 7);
