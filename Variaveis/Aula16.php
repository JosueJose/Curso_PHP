<?php 
$nome = "Josué";
function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "José";
	echo $nome. " ";

}
teste();
teste2();
?>