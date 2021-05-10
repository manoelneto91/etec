<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Exclusão - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Exclusão - Aluno</h1>
		<p>
			<?php
				$codigo = $_POST['codigo'];
				
				
				$conexao = mysql_connect("localhost", "root", "");
				mysql_select_db("escola", $conexao);
				
				if($codigo == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='delaluno.php'>Excluir Aluno</a></p>";
				}
				else{
					$sql = "delete from aluno where codaluno = '$codigo'";
					$result = mysql_query($sql, $conexao);
					echo "Aluno Excluido com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>