<?php
$a = 55;
$b = 40;

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

$c = 55;
$d = 55.0;

// = é atribuição
var_dump($c = $d);
echo "<br>";
//== é comparação 
var_dump($c == $d);
echo "<br>";
//=== é igualdade de identidade
var_dump($c === $d);
echo "<br>";
//diferente
var_dump($c != $d);
echo "<br>";
//diferença de identidade
var_dump($c !== $d);
echo "<br>";
?>