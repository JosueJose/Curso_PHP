<?php 
$frutas = array("laranja", "abacaxi", "melancia");
//print_r é igual mostre array
print_r($frutas);

echo "<br><br>";

//OBS.: quando o array tem apenas uma dimensão, é chamado de vetor; 2 dimensões é bidimensional; 3 é tridimensional e por aí vai.

//Array bidimensional abaixo

//Quando o final for 0 é  montadora
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

//Quando o final for 1 é um modelo
$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sports";

//Exibir o camaro
echo $carros[0][3];
echo "<br><br>";
//Me mostre o último modelo de carro, uso o "end" pra isso
echo end($carros[1]);
echo "<br><br>";

$pessoas = array();
array_push($pessoas, array (
'nome'=>'João',
'idade'=>20
));

array_push($pessoas, array (
'nome'=>'Glaucio',
'idade'=>25
));

print_r($pessoas);

echo "<br>";

//Mostrar só os dados do João
print_r($pessoas[0]);

echo "<br>";

//Mostrar só o nome do João
print_r($pessoas[0]['nome']);
?>