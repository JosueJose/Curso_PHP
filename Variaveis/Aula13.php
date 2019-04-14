<?php
$nome = "Josué tá chegando!";
$SobreNome = "Ferreira";
$NomeCompleto = $nome . " " . $SobreNome faz a concatenação e separa os nomes desse jeito
exit; para de rodar aqui
echo $nome; echo mostra na tela
var_dump($nome); mostra a variável e os dados que ela usou.
/* o que estiver aqui dentro não será lido*/
echo"</br>"; pula linha
unset($nome); anula a definição da variável
if (isset($nome)) { 
	echo $nome;
}verifica se tem alguma coisa e mostra se tiver
?>