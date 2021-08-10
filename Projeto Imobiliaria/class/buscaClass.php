<?php
	// Busca as class do arquivo anterior
	spl_autoload_register(
		//$nomeClass nome do arquivo da classe
		function($nomeClass)
		{
			//Testa se existe o arquivo na pasta
			//faz a indentação do nome com o tipo de arquivo
			if (file_exists("$nomeClass.php")
            {
				require_once("$nomeClass.php")
			}
		}
	);
?>
	