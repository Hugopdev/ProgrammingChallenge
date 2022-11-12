<?php

// Solution 1 : utilisation des Regex pour valider l'adresse IP

function isValidIP(string $str): bool
{
    return preg_match('/^(\d|[1-9]\d|1\d\d|2([0-4]\d|5[0-5]))\.(\d|[1-9]\d|1\d\d|2([0-4]\d|5[0-5]))\.(\d|[1-9]\d|1\d\d|2([0-4]\d|5[0-5]))\.(\d|[1-9]\d|1\d\d|2([0-4]\d|5[0-5]))$/', $str);
}

// Solution 2 : utilisation d'une fonction native de PHP qui permet de 
//  vérifier si la chaine de caratères est bien une addresse ip 

function isValidIPNative(string $str): bool
{
    return filter_var($str, FILTER_VALIDATE_IP);
}

?>