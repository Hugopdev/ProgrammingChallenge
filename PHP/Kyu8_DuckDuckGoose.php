<?php

function duck_duck_goose($players, $goose) {
  // Write your code here
  return !($goose % count($players)) ? $players[count($players)-1]['name'] : $players[($goose % count($players))-1]['name'];  
}

?>

