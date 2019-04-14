<?php
//pra fazer uma constante, precisa usar a função "define", passar o 1º parametro - nome, 2º é o valor que essa constante vai ter

//OBD.: NÃO É OBRIGATÓRIO, MAS OS PROGRAMADOS CONSTUMAM DEIXAR AS VARIÁVEIS COM LETRA MAIÚSCULA
define("SERVIDOR", "127.O.O.1");
echo SERVIDOR; 

echo"<br><br>";

//Variável
define("BANCO_DE_DADOS", [
	'127.0.0.1', 
	'root', 
	'password', 
	'test'
]);
print_r(BANCO_DE_DADOS);

echo"<br><br>";
//Pra saber a versão do meu php
echo PHP_VERSION;
echo"<br><br>";

echo DIRECTORY_SEPARATOR;
?>