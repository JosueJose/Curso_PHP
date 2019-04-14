<?php
//pego o id da sessão que eu quero, e assim consigo ver ele aberto em outro navegador
//u6be10rsa0o7tmkbh7m75mpj7karray => pego o array pra trás apenas
session_id('u6be10rsa0o7tmkbh7m75mpj7k');
require_once("configuração.php");
echo session_id();
var_dump($_SESSION)

?>