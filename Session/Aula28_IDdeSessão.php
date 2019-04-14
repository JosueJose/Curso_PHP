<?php

require_once("config.php");
//Mostra o id de sessão

//echo session_id();
//força e mostra um outro id de sessão, ou seja, gera outro id
//echo "<br><br>";
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>