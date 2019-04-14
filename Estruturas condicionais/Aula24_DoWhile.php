<?php
$Total = 150;
$Desconto = 0.9;

do {
	$Total *= $Desconto;
} while ($Total > 100);
echo $Total;
?>