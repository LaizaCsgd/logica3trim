<?php

include('cabecalhof.php');
//array criado automaticamente contendo as variaveis criadas por post
$dados=($_POST);

//fazer com que a pagina exiba os valores informados no formulario
//nao esqueça de acrescentar cabecalho e rodape na pagina

foreach ($dados as $indice => $valor) {
	print($valor.'<br></br>');
}

include('rodapef.php');
?>