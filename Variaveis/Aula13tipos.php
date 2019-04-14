<?php
//TIPOS DE DADOS EM PHP
//tipos básicos
//String
$nome = "Josue";
$site = 'wwww.google.com.br';
//Inteiro
$ano = 2019;
//Flutuante
$salario = 5500,56;
//Booleano
$bloqueado = false;
/////////////////////////////////////
//tipos compostos
//array
$frutas = array("abacaxi", "laranja", "manga"); 
//echo $frutas[2]; mostra só manga
/////////////////////////////////////
//orientado a objeto
$nascimento = new datetime();
//var_dump($nascimento);
//////////////////////////////////////
//tipos especiais
$arquivo = fopen("Aula13tipos.php", "r");
var_dump($arquivo);
$nulo = NULL; //variável sem valor e nada reservado
$vazio = ""; //aqui fica reservado um espaço na memória

//Null = ausência de valor
//"" = foi iniciado mas está sem valor
?>