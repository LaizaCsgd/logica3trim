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
	$contador=0;
	foreach ($dados as $linha) {

		$contador++;		
		if($contador== '1'or '3' or '5'){
			$cor='preto';
		}elseif($contador=='2' or '4' or '6'){
			$cor='cinza';
		}
		//partes é um array que recebe o resultado da separaçao do texto pelo separador ;
		$partes=explode(";", $linha);
 		print('<tr>');
 				if ($partes[0]=='Código') {
 					print('<th><center>'.$partes[0].'</center></th>');
 				}
 				if ($partes[1]=='Nome') {
 					print('<th><center>'.$partes[1].'</center></th>');
 				}
 				if ($partes[2]=='Telefone') {
 					print('<th><center>'.$partes[2].'</center></th>');
 				}
 		print('</tr>');
 		print('<tr>');
 			if ($partes[0]!='Código') {
 					print('<td><center>'.$partes[0].'</center></td>');
 				}
 			if ($partes[1]!='Nome') {
 					print('<td><center>'.$partes[1].'</center></td>');
 				}
 			if ($partes[2]!='Telefone') {
 					print('<td><center>'.$partes[2].'</center></td>');
 				}
 		print('</tr>');
 	}
 	print('<tr>< colspan="2"td>'.($contador-1).'contatos listados(s)</td></tr>');
 	print('<table>');
//funçao abre um arquivo e torna o seu conteudo em uma string
	$cabecalho=file_get_contents("rodape.html");
	print($cabecalho);
?>
