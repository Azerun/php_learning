<?php

function sum($a, $b){
  return $a+$b;
}

function multiply($a, $b){
  return $a*$b;
}

function multiply_2($a, $b, $c, $d){
  return $a*$b*$c+$d;
}

var_dump(sum(3,4));
echo "<br>\n";
var_dump(multiply(3,4));
echo "<br>\n";
var_dump(multiply_2(2,2,2,2));
