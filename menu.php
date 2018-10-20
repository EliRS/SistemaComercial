<meta charset="utf-8">

<?php 

$cadastro = $_POST['cadastro']=(isset($_POST['cadastro']))?$_POST['cadastro']:null;
$consulta = $_POST['consulta']=(isset($_POST['consulta']))?$_POST['consulta']:null;

switch ($cadastro) {
		case 'cliente':
			header('Location: cadastro/cadastrar_cliente.php');
			break;
		case 'funcionario':
			header('Location: cadastro/cadastrar_funcionario.php');
			break;
		case 'fornecedor':
			header('Location: cadastro/cadastrar_fornecedor.php');
			break;
		case 'produto':
			header('Location: cadastro/cadastrar_produto.php');
			break;
		case 'usuario':
			header('Location: cadastro/cadastrar_usuario.php');
			break;
	}

switch ($consulta) {
	case 'cliente':
			header('Location: consulta/consulta_cliente.php');
			break;
		case 'funcionario':
			header('Location: consulta/consulta_funcionario.php');
			break;
		case 'fornecedor':
			header('Location: consulta/consulta_fornecedor.php');
			break;
		case 'produto':
			header('Location: consulta/consulta_produto.php');
			break;
		case 'usuario':
			header('Location: consulta/consulta_usuario.php');
			break;
	}

?>