<?php

/*
    Given three integers a ,b ,c, 
    return the largest number obtained
    after inserting the following operators 
    and brackets: +, *, ()
    In other words , try every combination of a,b,c with [*+()],
    and return the Maximum Obtained

    La solution consiste à utiliser la fonction max de PHP en
    lui entrant en paramètre toutes les combinaisons possible
*/


function expressionMatter($a, $b, $c) {

    return max([
        $a * $b * $c,
        $a + $b + $c,
        ($a + $b) * $c,
        $a + $b * $c,
        $a * $b + $c,
        $a * ($b + $c),
        ]);

}