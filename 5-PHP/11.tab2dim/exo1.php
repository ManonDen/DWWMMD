<?php
    $T=[
        [2,50,82,92,25,15,65,70,60,4,50,50],
        [85,5,40,103,80,5,6,7,66,45,51,50],
        [23,5,8,74,2,10,65,7,63,43,49,50],
        [3,43,1,99,103,5,80,63,13,45,53,43],
        [29,5,80,91,24,1,60,22,66,46,5,42],
        [22,5,89,71,24,15,61,63,60,4,76,61],
        [53,19,8,60,43,15,65,33,60,4,53,13],
        [914,50,2,80,2,1,65,70,66,41,55,12]
    ];
    $max=0;
    for ($i=0;$i<=7;$i++){
        for ($j=0;$j<=11;$j++){
            if ($T[$i][$j] >$max){
                $max=$T[$i][$j];
            }
        }
    }
    echo($max."\n");
?>