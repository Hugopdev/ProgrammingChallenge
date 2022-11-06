<?php

//using regex to replace exclamation marks

function remove_exclamation_marks($string) {
    return preg_replace('/!/','',$string);
  }

?>