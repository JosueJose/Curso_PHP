<?php
//muda o tipo para inteiro
//$nome = (int)$_GET["a"]; 
//fica como string
//$nome = $_GET["a"]; 
//var_dump($nome);

//mostra o IP do cliente
//$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip

//mostra o que foi acessado, sistema de log
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
?>