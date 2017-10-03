<?php
	include('cabecalhof.php');



	//array criado automaticamente , contendo as variaveis enviadas por método post


	//faça com que a página exiba os valores informados  no formulario
	//não esqueça  de acrescentar cabeçalho e rodapéem sua página

	$dados = $_POST;

	foreach ($dados as $key => $value){ 
		
	print($key." = ".$value.'<br></br>');
	
	}



	include('rodapef.php');
?>	
