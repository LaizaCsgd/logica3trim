<?php

//funçao abre um arquivo e retorna seu conteudo em uma string
//include trará o arquivo como código executavel(para php junto com html)
	$cabecalho=file_get_contents("cabecalho.html");
	print($cabecalho);

	print(date("l,F d,Y,H:i:s"));
//funçao file abre um arquivo e retorna o conteudo em array
	$dados = file("agenda.csv");

//percorrer o array e exibir cada um ds elementos
	print('<table border="1">');
	foreach ($dados as $linha) {
		//partes é um array que recebe o resultado da separaçao do texto pelo separador ;
		$partes=explode(";", $linha);
 		print('<tr>
 				<td><center>'.$partes[0].'</center></td>
 				<td><center>'.$partes[1].'</center></td>
 				<td><center>'.$partes[2].'</center></td>
 				<td><center>'.$partes[3].'</center></td>
 			</tr>');
 	}
 	print('<table>');
//funçao abre um arquivo e torna o seu conteudo em uma string
	$cabecalho=file_get_contents("rodape.html");
	print($cabecalho);
?>
