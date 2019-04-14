<?php
$nome = "Zack"; $nome2 = 'Josué'; var_dump($nome, $nome2); echo "<br>";

//"" - tudo é string
echo "Meu apelido é $nome"; echo "<br>";

//'' - coloca o nome da variável se tiver
echo 'Meu nome é $nome2'; echo "<br>";

/////////////////////////////////////////

$frase = "meu malvado favorito";
echo $frase; echo "<br>"; 

//Maiúsculo
echo strtoupper($frase); echo "<br>"; 

//Minúsculo
echo strtolower($frase); echo "<br>"; 

//Primeira maiúscula
echo ucwords($frase); echo "<br>"; 

//Só a primeira letra da primeira palavra
echo ucfirst($frase); echo "<br><br>"; 

//Trocar letrar por outras sugeridas
$empresa = "Udemy";
$empresa = str_replace("U", "P", $empresa); 
echo $empresa; echo "<br>"; 

$palavra = "Zack";
$palavra= str_replace("Zack", "Josué", $palavra); 
echo $palavra; echo "<br><br>";

//Posição de palavras no texto
$frase = "Estou cansado de estudar, quero dormir!"; 
$q = strpos($frase, "quero");
var_dump($q); echo "<br><br>";

// Texto que está antes da palavra quero
$texto = substr($frase, 0, $q);
var_dump($texto); echo "<br><br>";

//Depois da palavra quero
$texto2 = substr($frase, $q + 5, strlen($frase));
var_dump($texto2);

?>
