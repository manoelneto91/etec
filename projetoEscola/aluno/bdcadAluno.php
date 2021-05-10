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
					echo "<p><a href='cadastroaluno.php'>Cadastro Alunos</a></p>";
				}
				else{
					$sql = "insert into aluno values (null, '$nome', '$rg', '$ra', '$endereco', '$cidade','$email', '$telefone')";
					$result = mysql_query($sql, $conexao);
					echo "Aluno Cadastrado com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>