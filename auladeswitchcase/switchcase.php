<?php

$diadasemana = 8;//date("w");

switch ($diadasemana) {
		case 0:
		echo " Hoje é domingo";
		break;
		
		case 1:
		echo " Hoje é Segunda";
		break;
		
		case 2:
		echo " Hoje é Terça";
		break;
		
		case 3:
		echo " Hoje é Quarta";
		break;
		
		case 4:
		echo " Hoje é Quinta";
		break;
		
		case 5:
		echo " Hoje é Sexta";
		break;
		
		case 6:
		echo " Hoje é Sábado";
		break;

		default:
		echo "Data Inválida";
		break;

	}	

?>