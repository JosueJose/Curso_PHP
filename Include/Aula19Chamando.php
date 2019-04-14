<?php
//se eu tiver com função em outra include "pasta/Aula19.php"

//Se eu tiver  função dentro do mesmo diretório e em outra pasta include "../pasta/Aula19.php"

//include "Aula19.php";

//include - tenta rodar o código mesmo que o arquivo não exista ou esteja errado.

//require - obriga a execução correta do código ou que o arquivo exista, ou seja, a pasta de onde vai vir os códigos.

//require_once ou inclue_once só chama uma vez, mesmo que já tenha outras chamadas, e não dá erro.

require "Aula19.php";
$resultado = somar(10, 20);
echo $resultado
?>