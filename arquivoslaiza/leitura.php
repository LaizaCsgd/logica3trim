<?php

//variavel receberá o conteudo de um arquivo e será um string
//info adicional = a tag <hr> serve pra inserção de linha horizontal
	$contatos = file_get_contents("agenda.csv");
	
	echo ($contatos);

?>