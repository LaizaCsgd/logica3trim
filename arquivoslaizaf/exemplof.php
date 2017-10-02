<?php
	include('cabecalhof.php');
	print($cabecalho);
?>
	<a href="inserircontatof.php">Inserir novo contato</a>
<?php
	//funcao file abre um arquivo e retorna seu conteudo para um array
	$dados = file("agenda.csv");
	//percorrer o array e exibir cada um dos elementos
	print("<table border='1'>");
	$cont=0;
	foreach ($dados as $linha) {
		$partes=explode(";", $linha);
		//partes e um array que recebe o resultado da separacao do texto pelo separado
		//printando o titulo das colunas
		if ($cont==0) {
			print("<tr>
				<th>".$partes[1]."</th>
				<th>".$partes[3]."</th>
				</tr>");
			//colorindo as linhas
			//linha par
		}elseif ($cont%2==0) {
			print("<tr class='red'>
				<td><center><a href='contatof.php?cod='".$partes[0]."'>".$partes[1]."</a></center></td>
				<td><center>".$partes[3]."</center></td>
				</tr>");
			//linha impar
		}elseif ($cont%2==1) {
			print("<tr class='blue'>
				<td><center><a href='contatof.php?cod='".$partes[0]."'>".$partes[1]."</a></center></td>
				<td><center>".$partes[3]."</center></td>
				</tr>");
		}
		$cont++;
	}

	print("<tr><td colspan='4'>Voce tem ".($cont-1)." contatos em sua agenda</td></tr>");
	print("</table>");
	//funcao abre um arquivo e retorna seu conteudo em uma string
	$rodape=file_get_contents("rodapef.php");
	print($rodape);
?>