<?php

$qualasuaidade = 110;

$idadecrianca = 12;
$idademaior = 18;
$idademelhor = 65;
$idademorto = 110;

if ($qualasuaidade < $idadecrianca) {

	echo "Você é criança";

}else if ($qualasuaidade < $idademaior) {

	echo "Você é adolescente";

} else if ($qualasuaidade < $idademelhor) {

	echo "Você é adulto";

}else if ($qualasuaidade <= $idademorto){

	echo "Você é idoso";

}else {

	echo "Você está morto";

}

echo "<br>";

//os dois pontos ":" equivale ao se não, o sinal de interrogação "?" depois de echo quer dizer IF(se for verdadeira).

echo ($qualasuaidade < $idademaior)? "Você é menor de idade":"Você é maior de idade";

?>