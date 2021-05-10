<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Home - Sistema Escola</title>
		<link href="style.css" rel="stylesheet"/>
	</head> 
	<body>
		<div class="menu-container">
			<ul class="menu clearfix">
				<li><a href="#">ALUNO</a>
				<!-- Nível 1 -->
				<!-- submenu -->
					<ul class="sub-menu clearfix">
						<li><a href="aluno/cadastroaluno.php">CADASTRO</a></li>
						<li><a href="aluno/veraluno.php">VISUALIZAR</a></li>
						<li><p>ALTERAR</p>
							<form method="POST" action="aluno/alteraluno.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Alterar" />
							</form>
						</li>
						<li><p>EXCLUIR</p>
							<form method="POST" action="aluno/delaluno.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Excluir" />
							</form>
						</li>
					</ul><!-- submenu -->
				</li>
				<li><a href="#">PROFESSOR</a>
					<ul class="sub-menu clearfix">
						<li><a href="professor/cadastroprof.php">CADASTRO</a></li>
						<li><a href="professor/verprof.php">VISUALIZAR</a></li>
						<li><p>ALTERAR</p>
							<form method="POST" action="professor/alterprof.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Alterar" />
							</form>
						</li>
						<li><p>EXCLUIR</p>
							<form method="POST" action="professor/delprof.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Excluir" />
							</form>
						</li>
					</ul><!-- submenu -->
				</li>
				<li><a href="#">FUNCIONARIO</a>
					<ul class="sub-menu clearfix">
						<li><a href="funcionario/cadastrofunc.php">CADASTRO</a></li>
						<li><a href="funcionario/verfunc.php">VISUALIZAR</a></li>
						<li><p>ALTERAR</p>
							<form method="POST" action="funcionario/alterfunc.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Alterar" />
							</form>
						</li>
						<li><p>Excluir Funcionario</p>
							<form method="POST" action="funcionario/delfunc.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Excluir" />
							</form>
						</li>
					</ul><!-- submenu -->
				</li>
				<li><a href="#">TURMA</a>
					<ul class="sub-menu clearfix">
						<li><a href="turma/cadastroturma.php">CADASTRO</a></li>
						<li><a href="turma/verturma.php">VISUALIZAR</a></li>
						<li><p>ALTERAR</p>
							<form method="POST" action="turma/alterturma.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Alterar" />
							</form>
						</li>
						<li><p>Excluir Turma</p>
							<form method="POST" action="turma/delturma.php">
								<label>Código:<input type="text" name="codigo"/></label><br/>
								<input type="submit" value="Excluir" />
							</form>
						</li>
					</ul><!-- submenu -->
				</li>
				<li><a href="#">PESQUISA</a>
					<ul class="sub-menu clearfix">
						<li><a href="pesquisa/pesquisanome.php">NOME</a></li>
						<li><a href="pesquisa/pesquisacidade.php">CIDADE</a></li>
						<li><a href="#">xxxxxxx</a></li>
					</ul><!-- submenu -->
				</li>
				<li><a href="#">VINCULAR</a>
					<ul class="sub-menu clearfix">
						<li><a href="vincular/turmaprof.php">PROFESSOR a TURMA</a></li>
						<li><a href="vincular/turmaaluno.php">ALUNO a TURMA</a></li>
						<li><a href="#">xxxxxxx</a></li>
					</ul><!-- submenu -->
				</li>
			</ul>
		</div>	
		<h1>Bem vindo ao projeto Escola!!!</h1>
		<h1>Por Favor escolha a opção desejada no menu acima!</h1>
	</body>
</html>