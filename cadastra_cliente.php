<html>
	<head><title>Cadastro de Cliente</title>
	<meta charset="utf-8">
	<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
	</script>
</head>
	<body>
		<h1>CADASTRO DE CLIENTE</h1>
		<br><br>
		<form action="#" method="POST">
			Nome: <input type="text" name="nome"><br>
			CPF:  <input type="text" name="cpf"><br>
			RG:  <input type="text" name="rg"><br>
			Data Nascimento:  <input type="text" name="nasc"><br>
			CEP:  <input type="text" name="cep" ID="cep"><input type="button" value="buscar" ONCLICK="pesquisacep(cep.value);"><br>
			Rua:<input type="text" name="end" ID="rua"><br>
			Bairro: <input type="text" name="bairro" ID="bairro"><br>
			Cidade:  <input type="text" name="cidade" ID="cidade"><br>
			Estado: <input type="text" name="estado" ID="uf"><br>
			<br>
			<input type="submit" value="Cadastrar"> 
			<input type="reset" value="Limpar">
			<input type="button" value="Voltar" onclick="javascript: location.href='index.html'">
			<br><br>
		</form>
	</body>
</html>

<?php
	
	if(isset($_POST['nome'])) // isset - verifica se a variável $_POST[] existe
	{
		$nome = $_POST['nome'];
	}
	if(isset($_POST['cpf']))
	{
		$cpf =  ($_POST['cpf']);
	}
	if(isset($_POST['rg']))
	{
		$rg =  ($_POST['rg']);
	}
	if(isset($_POST['nasc']))
	{
		$nasc =  ($_POST['nasc']);
	}
	if(isset($_POST['cep']))
	{
		$cep =  ($_POST['cep']);
	}
	if(isset($_POST['end']))
	{
		$rua =  ($_POST['end']);
	}
	if(isset($_POST['bairro']))
	{
		$bairro =  ($_POST['bairro']);
	}
	if(isset($_POST['cidade']))
	{
		$cidade =  ($_POST['cidade']);
	}
	if(isset($_POST['estado']))
	{
		$estado =  ($_POST['estado']);
	}


	
	if(isset($nome) != ""){

		$caminho = "cadastros\cliente.txt"; //caminho onde sera criado o arquivo
		$conteudo = "		
$nome, $cpf, $rg, $nasc, $cep, $rua, $bairro, $cidade, $estado.

";

		if(file_put_contents($caminho,$conteudo,FILE_APPEND))
		{
			print "Cadastrado com sucesso";
		}
		else
		{
			print"Erro ao salvar";
		}
	}

?>
