<?php 

$nome = "João";
$anoNascimento = 1998;
$sobrenome = "Rangel";
$nomeCompleto = $nome . " " . $sobrenome;

echo "Seu nome é: $nomeCompleto </br>";
echo "Seu ano de nascimento é: $anoNascimento";



exit;


unset($nome);

echo "</br></br>";

$nome = "maria";

if (isset($nome)) {
	echo $nome;
}


?>
