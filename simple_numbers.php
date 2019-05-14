<?php

function getSimpleNumbers($n){

    $gridLength = $n + 1;
    $grid = array_fill(0, $gridLength, true);
    $resultArray = array();

    for($i = 2; $i < $gridLength; $i++){

        if($grid[$i] === false) $i++;

        $step = $i;
        for($j = $i + $step; $j < $gridLength; $j = $j + $step){
            $grid[$j] = false;
        }
    }

    for($i = 2; $i < $gridLength; $i++) if($grid[$i]) $resultArray[] = $i;

    return $resultArray;
}

var_dump(getSimpleNumbers(100));
