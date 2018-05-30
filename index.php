<?php 

$nome = "joao";
$anoNascimento = 1998;

echo "$nome $anoNascimento";

unset($nome);

echo "</br></br>";

$nome = "maria";

if (isset($nome)) {
	echo $nome;
}


?>
