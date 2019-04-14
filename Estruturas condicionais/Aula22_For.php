<?php
//incremento de 1 em 1 sem pulando linha
for ($i = 0; $i < 10; $i++) { echo $i."<br>";} echo "<br>";

//incremento de 5 em 5 sem pular linha
for ($i = 0; $i < 20; $i += 5) { echo $i.", ";} echo "<br><br>";

//Incremento de 1 em 1 omitindo do 10 até 15 e parar no 18
for ($i = 0; $i < 20; $i++) { if ($i >10 && $i < 15) continue; 
	if ($i === 19) break; echo $i." - ";} echo "<br><br>";

//pra escolher um ano pra selecionar
echo "<select>";
for ($i=date("Y"); $i >= date("Y") - 100; $i--) {
	echo '<option value="'.$i.'">'.$i.'</option>';
} echo "</select>"
?>