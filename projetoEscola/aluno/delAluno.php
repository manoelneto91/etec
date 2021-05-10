<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Excluir - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Excluir Cadastro - Aluno</h1>
		<p>
			<?php
			
				$codigo = $_POST['codigo'];
			
				$conexao = mysql_connect("localhost", "root", "");
				mysql_select_db("escola", $conexao);
				
				$sql = "select * from aluno where codaluno=$codigo";
				
				$result = mysql_query($sql, $conexao) or die (mysql_error());
				
				$linha = mysql_fetch_array($result);
				
				$nome = $linha["nome"];
				$rg = $linha["rg"];
				$ra = $linha["ra"];
				$endereco = $linha["endereco"];
				$cidade = $linha["cidade"];				
				$email = $linha["email"];
				$telefone = $linha["telefone"];
				
				echo "<form method='POST' action='excluiraluno.php'>";
					echo"<input type='hidden' name='codigo' value='$codigo'>";
					echo"<label>Nome:<input type='text' name='nome' value='$nome'/></label><br/>";
					echo"<label>RG:<input type='text' name='rg' value='$rg'/></label><br/>";
					echo"<label>RA:<input type='text' name='ra' value='$ra'/></label><br/>";
					echo"<label>Endereço:<input type='text' name='endereco' value='$endereco'/></label><br/>";
					echo"<label>Cidade:<input type='text' name='cidade' value='$cidade'/></label><br/>";
					echo"<label>E-Mail:<input type='text' name='email' value='$email'/></label><br/>";
					echo"<label>Telefone:<input type='text' name='telefone' value='$telefone'/></label><br/>";
					echo"<input type='submit' value='Excluir Usuário' />";
				echo"</form>";
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>