<?php
$a = NULL;
$b = NULL;
$c = 10;
//mostra pra mim aquele que tem valor primeiro, se eu colocar
//algum valor no b, vai parar nele e mostrar o valor
echo $a ?? $b ?? $c;

?>