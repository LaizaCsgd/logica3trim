<?php
	include("cabecalhof.php");
?>
	<form method="post" action="gravaContato.php">
		<label for="Nome">Nome</label>
		<input type="text" name="Nome">
		<br>
		<label for="Telefone">Telefone</label>
		<input type="text" name="Telefone">
		<br>
		<label for="Email">Email</label>
		<input type="email" name="Email">
		<br>
		<label for="Foto">Foto</label>
		<input type="text" name="Foto">
		<br>
		<input type="submit" name="Inserir">
	</form>
<?php
	$rodape=file_get_contents("rodapef.php");
	print($rodape);
?>