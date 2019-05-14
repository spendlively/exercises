<?php

function arrayMerge($arrayOne, $arrayTwo)
{
    $resultArray = array();
    $indexOne = 0;
    $indexTwo = 0;

    while (true) {

        if ($arrayOne[$indexOne] <= $arrayTwo[$indexTwo]) {
            $resultArray[] = $arrayOne[$indexOne++];
            if (!isset($arrayOne[$indexOne])) {
                while (isset($arrayTwo[$indexTwo])) $resultArray[] = $arrayTwo[$indexTwo++];
                break;
            }
        } else {
            $resultArray[] = $arrayTwo[$indexTwo++];
            if (!isset($arrayTwo[$indexTwo])) {
                while (isset($arrayOne[$indexOne])) $resultArray[] = $arrayOne[$indexOne++];
                break;
            }
        }
    }

    return $resultArray;
}

$a1 = [1, 3, 5, 7, 9];
$a2 = [0, 2, 4, 6, 8, 10, 11, 12, 13];

var_dump(arrayMerge($a1, $a2));
