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
date_default_timezone_set('America/Sao_Paulo');
$exibir = array("Nome: ", "Idade: " , "Sexo: ", "CPF: ","CNPJ: ", "RG: ", "Telefone: ","E-mail: ","Cargo: ", "CEP: ", "Rua: ", "Bairro: ", "Cidade: ", "UF: ");

$res = array($_POST['nome'], 
	$_POST['idade'], 
	$_POST['sexo'], 
	$_POST['cpf'], 
	$_POST['cnpj'],
	$_POST['rg'], 
	$_POST['telefone'],
	$_POST['email'], 
	$_POST['cargo'],
	$_POST['cep'],
	$_POST['rua'],
	$_POST['bairro'],
	$_POST['cidade'],
	$_POST['uf']);
	
	$tamanho_array = count($res);

	for ($x=0; $x < count($res); $x++) { 
		echo $exibir[$x].$res[$x];
		echo "<br>";
	}

	if(isset($res[0]) != ""){

		$caminho = "funcionario.txt"; //caminho onde sera criado o arquivo
		$conteudo = "$res[0], $res[1], $res[2], $res[3], $res[4], $res[5], $res[6], $res[7], $res[8], $res[9], $res[10], $res[11], $res[12], $res[13]
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

<?php if(isset($_FILES['pic'])) { $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo 
$new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo 
$dir = './imagens/'; //Diretório para uploads 
move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo 
echo("Imagen enviada com sucesso!"); 

} ?>
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


