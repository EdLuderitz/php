<?php  

$nome = (int)$_GET["a"];
$nome1 = (int)$_GET["b"];

/*var_dump($nome);
var_dump($nome1);*/

//http://localhost/projeto/php/exemplo-04.php?a=123&b=456

//pegar o ip do usuário

//$ip = $_SERVER["REMOTE_ADDR"];

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;



?>