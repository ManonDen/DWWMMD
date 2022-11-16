<?php
  for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
       if ($j == 1) {
         echo str_pad($i * $j, 6, " ");
       } else {
         echo str_pad($i * $j, 6, " ");
       }
    }
    echo "\n";
  }
?>