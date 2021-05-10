<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Visualizar - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Visualizar - Aluno</h1>
		<p>
			<?php
				$conexao = mysql_connect("localhost", "root", "");
				mysql_select_db("escola", $conexao);
				
				$sql = "select * from aluno";
				
				$result = mysql_query($sql, $conexao) or die (mysql_error());
				
				while ($linha = mysql_fetch_array($result))
				{
					echo "<br/>Código: ".$linha["codaluno"];
					echo "<br/>Nome: ".$linha["nome"];
					echo "<br/>RG: ".$linha["rg"];
					echo "<br/>RA: ".$linha["ra"];
					echo "<br/>Endereço: ".$linha["endereco"];
					echo "<br/>Cidade: ".$linha["cidade"];
					echo "<br/>E-Mail: ".$linha["email"];
					echo "<br/>Telefone: ".$linha["telefone"];
					echo "<br/>";
				}
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>