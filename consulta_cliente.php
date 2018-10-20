<meta charset="utf-8">
<h1>Relatório de Clientes </h1>
<?php
//Variavel que recebe o caminho e nome do arquivo
	$caminho = 'cadastros\cliente.txt';
		
//função responsavel por capturar o conteudo
//do arquivo e apresentar no navegador
//nl2br - função que substitui a quebra de linha
//por <br>
	print nl2br(file_get_contents($caminho));
	

?>