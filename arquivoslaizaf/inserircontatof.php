<?php
	include("cabecalhof.php");
	//action é "para onde mandar os dados dos inputs
?>
	<form method="post" action="gravarcontatof.php">
		<label for="nome">Nome</label>
		<input type="text" name="nome">

		<label for="endereco">Endereço</label>
		<input type="text" name="endereco">

		<label for="email">Email</label>
		<input type="email" name="email">

		<label for="telefone">Telefone</label>
		<input type="text" name="telefone">

		<input type="submit" name="gravar">
	</form>
<?php
	include("rodapef.php");
?>