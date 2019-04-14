<?php
$Palavra = "Dezembro"; 
$Janeiro = "Janeiro"; 
$Fevereiro = "Fevereiro";

if ($Palavra == $Janeiro) { echo "Recebi em Janeiro";}
elseif ($Palavra == $Fevereiro) { echo "Recebi em Fevereiro";}
else { echo "Quem me dera se fosse dezembro!";}

echo "<br>";

echo ($Palavra == "Dezembro")?"Que venha natal!":"Falta alguns meses";

?>