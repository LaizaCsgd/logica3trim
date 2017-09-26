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
		if ($cont==0) {
			print("<tr>
				<th>".$partes[0]."</th>
				<th>".$partes[1]."</th>
				<th>".$partes[2]."</th>
				<th>".$partes[3]."</th>
				</tr>");
		}elseif ($cont%2==0) {
			print("<tr class='red'>
				<td>".$partes[0]."</td>
				<td>".$partes[1]."</td>
				<td>".$partes[2]."</td>
				<td>".$partes[3]."</td>
				</tr>");
		}elseif ($cont%2==1) {
			print("<tr class='blue'>
				<td>".$partes[0]."</td>
				<td>".$partes[1]."</td>
				<td>".$partes[2]."</td>
				<td>".$partes[3]."</td>
				</tr>");
		}
		$cont++;
	}

	print("<tr><td colspan='4'>".($cont-1)." contatos</td></tr>");
	print("</table>");
	//funcao abre um arquivo e retorna seu conteudo em uma string
	$rodape=file_get_contents("rodapef.php");
	print($rodape);
?>