<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Cadastro - Aluno</h1>
		<p>
			<?php
				$codigo = $_POST['codigo'];
				$nome = $_POST['nome'];
				$rg = $_POST['rg'];
				$ra = $_POST['ra'];
				$endereco = $_POST['endereco'];
				$cidade = $_POST['cidade'];				
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				
				$conexao = mysql_connect("localhost", "root", "");
				mysql_select_db("escola", $conexao);
				
				if($nome == "" or $rg == "" or $ra == "" or $endereco == "" or $telefone == "" or $cidade == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='alteraluno.php'>Alterar Aluno</a></p>";
				}
				else{
					$sql = "update aluno set nome = '$nome', rg = '$rg', ra = '$ra', endereco = '$endereco', cidade = '$cidade', email = '$email', telefone = '$telefone' where codaluno = '$codigo'";
					$result = mysql_query($sql, $conexao);
					echo "Aluno Alterado com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>