<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Menuzao</title>
</head>
<body>

<form action="../menu.php" method="POST">
<div id='cssmenu'>
<ul>
  </li>
   
   <li class='last'><a href='../menu.html'><span >Home</span></a>
   
   </li>
   <li class='active has-sub'><a href='#'> <span>Cadastro</span></a>
      <ul>
         <li class='has-sub'><button class="b1" type="submit" name="cadastro" value="cliente"><span>Cliente</span></button>
            
         </li>
         <li class='has-sub'><button  class="b1" type="submit" name="cadastro" value="funcionario"><span>Funcionário</span></button>
            
         </li>
		 <li class='has-sub'><button class="b1" type="submit" name="cadastro" value="fornecedor"><span>Fornecedor</span></button>
            
         </li>
		 <li class='has-sub'><button class="b1" type="submit" name="cadastro" value="produto"><span>Produto</span></button>
            
         </li>
		 <li class='has-sub'><button class="b1" type="submit" name="cadastro" value="usuario"><span>Usuário</span></button>
            
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Consulta</span></a>
      <ul>
         <li class='has-sub'><button class="b1" type="submit" name="consulta" value="cliente"><span>Cliente</span></button>
            
         </li>
         <li class='has-sub'><button  class="b1" type="submit" name="consulta" value="funcionario"><span>Funcionário</span></button>
            
         </li>
       <li class='has-sub'><button class="b1" type="submit" name="consulta" value="fornecedor"><span>Fornecedor</span></button>
            
         </li>
       <li class='has-sub'><button class="b1" type="submit" name="consulta" value="produto"><span>Produto</span></button>
            
         </li>
       <li class='has-sub'><button class="b1" type="submit" name="consulta" value="usuario"><span>Usuário</span></button>
            
         </li>
      </ul>
   </li>
   
      
   </li>
   
   <li class='last' style="float:right;" ><a href='../index.html'><span >Sair</span></a>
   
   </li>
</ul>
</div>
</form>

<center>
	<br>
	<br>
	<br>
	<br>
	<br>
  <div class="container">
    <br>
	 <form action="../confirmar/confirmar_produto.php" method="POST">	
			Nome: <input type="text" name="nome">
			<br>
      <br>
      		Data de validade: <input type="date" name="validade">
      		<br>
      <br>
      		Preço: <input type="number" name="preco" step=0.01 style="margin-left: 9%;">
      		<br>
      <br>
      Quantidade: <input type="number" name="quantidade" >
      <br>
          <br>
      <label for="conteudo">Enviar imagem:</label>
      <input type="file" name="pic" accept="image/*">
      <br>
          <br>
      		
			<input type="submit" value="Cadastrar"><br><br>
	 </form>
  </div>
</center> 

</body>
<style type="text/css">
#trocar{

  /*width: 49%;
  float: left;
  margin-top: 50px;*/
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

  input[type=text]{
    width:70%;
    padding:12px 20px;
    //font-size:20px;
    border: 2px solid #555;
    border-radius: 4px;
  }
  input[type=text]:focus {
    border-radius: 4px;
    border: 2px solid black;
  }
  input[type=tel]{
    width:70%;
    padding:12px 20px;
    //font-size:20px;
    border: 2px solid #555;
    border-radius: 4px;
    width: 40%;
  }
  input[type=tel]:focus {
    border-radius: 4px;
    border: 2px solid black;
  }

  input[type=number]{
    width:30%;
    padding:12px 20px;
    //font-size:20px;
    border: 2px solid #555;
    border-radius: 4px;
  }
  input[type=number]:focus {
    border-radius: 4px;
    border: 2px solid black;
  }
  input[name=idade]{
    width: 20%;
  }
  input[name=cep]{
    width: 40%;
  }
  input[name=uf]{
    width: 10%;
  }

body{
    background-image: url(fundo.jpg);
    background-size: cover;
    background-attachment: fixed; 
}
.b1{
   width: 150px;
   height: 40px;
   background: #0fa1e0;
   color: white;
   border:1px solid #0fa1e0;
   -webkit-transition-duration: 0.4s;
   transition-duration: 0.1s;
}
.b1:hover{
   border:1px solid red;
   background-color: #0fa1e0;
   color: black;
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    border: 1px solid #0a678f;
    margin-left: 10px;
}


</style>
</html>