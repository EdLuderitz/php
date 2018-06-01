<?php

//include "include.php";

/*Diferença entre Require e Include, require obriga que o arquivo exista e que esteja funcionando corretamente, se não estiver = fatal error, include tenta funcionar mesmo que esteja com erros ou nao exista, bom para usar em projetos internos.
require_once "include.php";*/
require "include.php";

$resultado = somar(10, 25);

echo $resultado;


?>