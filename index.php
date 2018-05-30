<?php 

$nome = "João";
$anoNascimento = 1998;
$sobrenome = "Rangel";
$nomeCompleto = $nome . " " . $sobrenome;

echo "Seu nome é: $nomeCompleto </br>";
echo "Seu ano de nascimento é: $anoNascimento";

unset($nome, $sobrenome, $nomeCompleto);

echo "</br></br>";

$nome = "Maria";
$sobrenome = "Clara";
$nomeCompleto = $nome . " " . $sobrenome;


if (isset($nome, $sobrenome, $nomeCompleto)) {
	echo "Seu nome é: $nomeCompleto </br>";
	echo "Seu ano de nascimento é: $anoNascimento";
}


?>
