<?php
  $x = 67;
  $y = 33;

  function sum(){
    global $x, $y;
    $y = $x + $y;
    echo $y;
  }