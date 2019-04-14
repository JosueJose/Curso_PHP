<?php
session_start();
//session_unset(nome da variável) - limpa todas variáveis com o mesmo nome, e colocando no colchete limpa só a especificada, e não desloga o usuário
session_unset($_SESSION['nome']);
echo $_SESSION["nome"];

//session_destroy(); - limpa e desloga o usuário
?