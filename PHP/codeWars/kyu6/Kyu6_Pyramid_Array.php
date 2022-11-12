Write a function that when given a number >= 0, returns an Array of ascending length subarrays.

pyramid(0) => [ ]
pyramid(1) => [ [1] ]
pyramid(2) => [ [1], [1, 1] ]
pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
Note: the subarrays should be filled with 1s

<?php

// La première méthode consiste à utiliser la fonction array_fill()

function pyramid($n) {
    $pyramid = [];
    for ($i = 1; $i <= $n; $i ++) {
      $pyramid[] = array_fill(0, $i, 1);
    }
    return $pyramid;
  }

// La seconde plus classique une double boucle

function pyramid2($n) {
    $pyramid = [];
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j <= $i; $j++){
            $pyramid[$i][$j] = 1;
        }
    }
    return $pyramid;
}