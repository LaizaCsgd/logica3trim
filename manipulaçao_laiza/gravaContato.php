<?php
	include('cabecalhof.php');
	//array criado automaticamente , contendo as variaveis enviadas por método post
	//faça com que a página exiba os valores informados  no formulario
	//não esqueça  de acrescentar cabeçalho e rodapéem sua página

	$dados = $_POST;

	$codcerto=file("agenda.csv");

	foreach ($dados as $linha) {
		$colunas=explode(";", $linha);
		$cod_atual=$coluas[0];
	}

	$codigo=$cod_atual+1;
	$nome=$_POST['Nome'];
	$telefone=$_POST['Telefone'];
	$email=$_POST['Email'];
	$foto=$_POST['Foto'];

	$texto=$codigo.";".$nome.";".$telefone.";".$email.";".$foto;

//abrindo arquivo e posicionando ponteiro no final do conteudo para escrita
	$arquivo=fopen("agenda.csv","a+");

//escrevendo no arquivo
	fwrite($arquivo,"\n".$texto);

//fechando o arquivo
	fclose($arquivo);
?>

<h2>Contato inserido com sucesso!</h2>
<meta http-equiv="refresh" content="3;URL=index.php">

<?php
include('rodapef.php');
?>
