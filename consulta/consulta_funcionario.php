<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>	</title>
</head>
<body>
<center>
<div class="container">

<?php
	//Variavel que recebe o caminho e nome do arquivo	
	//função responsavel por capturar o conteudo
	//do arquivo e apresentar no navegador
	//nl2br - função que substitui a quebra de linha
	//por <br>
	$caminho =file('..\confirmar\funcionario.txt');


	foreach ($caminho as $information) {
		$information = trim($information);
		$informationFinal = explode(', ', $information);
		echo $printDados = "<h3> Nome: " . $informationFinal[0] . "<br>Idade: " . $informationFinal[1]."<br>Sexo: " . $informationFinal[2] . "<br>CPF: " . $informationFinal[3]."<br>CNPJ: ".$informationFinal[4]."<br>RG: ". $informationFinal[5]."<br>Telefone: ". $informationFinal[6]."<br>E-mail: ". $informationFinal[7]."<br>Cargo: ". $informationFinal[8]."<br>CEP: ". $informationFinal[9]."<br>Rua: ". $informationFinal[10]."<br>Bairro: ". $informationFinal[11]."<br>Cidade: ". $informationFinal[12]."<br>UF: ". $informationFinal[13]."</h3>";
}
	

		/*$printDados = "<h3> Nome: " . $informationFinal[0] . "<br>Idade: " . $informationFinal[1]."<br>Sexo: " . $informationFinal[2] . "<br>CPF: " . $informationFinal[3]."<br>RG: ". $informationFinal[4]."<br>Telefone: ". $informationFinal[5]."<br>E-mail: ". $informationFinal[6]."<br>CEP: ". $informationFinal[7]."<br>Rua: ". $informationFinal[8]."<br>Bairro: ". $informationFinal[9]."<br>Cidade: ". $informationFinal[10]."<br>UF: ". $informationFinal[11]."</h3>";*/
?>
</div>

<br>
<br>
<input type="button" value="Voltar" onclick="window.location.href='../menu.html'">


</center>
</body>
<style type="text/css">
	body{
		background-image: url(../img/fundo.jpg);
    background-size: cover;
    background-attachment: fixed; 
	}
	input[type=button] {
		display: inline-block;
		padding: 11px 25px;
		font-size: 14px;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		outline: none;
		color: #fff;
		background-color: #555;
		border: none;
		border-radius: 8px;
		box-shadow: 0 9px #999;
	}
	input[type=button]:hover {background-color: #555}

	input[type=button]:active {
		background-color: #555;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}
	.container{
		font-family: arial ;
		display: table-cell;
		border: 10px solid #000;
		border-radius: 15px;
		width: 350px;
		height: 100px;
		text-align: center;
		background: rgba(255, 255, 255, 0.6);
		t
	}
}
	</style>
</html>
<?php
	//Variavel que recebe o caminho e nome do arquivo
	//$caminho = '..\confirmar\funcionario.txt';	
	//função responsavel por capturar o conteudo
	//do arquivo e apresentar no navegador
	//nl2br - função que substitui a quebra de linha
	//por <br>
	//print nl2br(file_get_contents($caminho));
?>