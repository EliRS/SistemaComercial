<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<br><br><br>
<center>
<div class="container">
 <br><br>
<?php

$exibir = array("Nome: ", "Idade: " , "Sexo: ", "Telefone: ", "Email: ", "Username: ");

$res = array($_POST['nome'], 
	$_POST['idade'], 
	$_POST['sexo'], 
	$_POST['telefone'],
	$_POST['email'],
	$_POST['user'],
	);
	
	$tamanho_array = count($res);

	for ($x=0; $x < count($res); $x++) { 
		echo $exibir[$x].$res[$x];
		echo "<br>";
	}

	if(isset($res[0]) != ""){

		$caminho = "usuario.txt"; //caminho onde sera criado o arquivo
		$conteudo = "$res[0], $res[1], $res[2], $res[3], $res[4], $res[5]
";

		if(file_put_contents($caminho,$conteudo,FILE_APPEND))
		{
			print "Cadastrado com sucesso";
		}
		else
		{
			print "Erro ao salvar";
		}
	}

	echo "<br><br><br>Salvo com Sucesso!";

?>
<br><br>
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
		width: 450px;
		height: 100px;
		background: rgba(255, 255, 255, 0.6);
	}
</style>
</html>


