<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php 
		$us = $_POST['username'];
		$senha = $_POST['password'];

		if($us == "elias" && $senha == "elias" || $us == "admin" && $senha == "admin" ){
			header('Location: menu.html');
		}else{
			echo "<h2>Usuario ou senha Incorreta<h2>";
		}
		?>
		
		<?php if (($us != "Elias" && $senha != "Elias") || ($us == "Elias" && $senha != "Elias") || ($us != "Elias" && $senha == "Elias")): ?>
			<br>
			<input class="MyButton" type="button" value="Voltar" onclick="window.location.href='index.html'" />
		<?php endif ?>
	</center>
</body>
	<style>
	 input[type=button] {
		background-color: white;
		transition-duration: 0.4s;
		border-radius:8px;
		padding:10px 24px;
		color:black;
		border: 2px solid #008cba;
    }
	input[type=button]:hover{
		background-color: #008cba; 
		color: white;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
	</style>

</html>
