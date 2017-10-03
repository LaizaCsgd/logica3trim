<?php

print_r($_GET);

?>
<br></br>
<?php

include("cabecalhof.php");

//guardando valor recebido
	$codigo=$_GET['cod'];

//abrindo arquivo e guardando em array
	$dados= file("agenda.csv");

//percorrendo array
foreach ($dados as $linha) {
	//quebrando a linha em colunas
	$colunas= explode(";",$linha);
	//se o codigo da linha for igual ao passado no GET
	if($colunas[0]==$codigo){
		$nome=$colunas[1];
		$telefone=$colunas[2];
		$email=$colunas[3];
		$foto=$colunas[4];
	}
}

print('<img src="'.$foto.'">');
print('<h2>'.$nome.'</h2>');
print('<p>'.$telefone.'</p>');
print('<p>'.$email.'</p>');

include("rodapef.php");
?>