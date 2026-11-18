<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cursos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  		<span class="navbar-brand mb-0 h1">Cadastro de Cursos:</span>
  		<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="../index.php">Voltar</a>
      		</li>
      	</ul>
	</nav>
		<form class="alinhamento" method="POST" action="salvar_estudante.php">
			<h2>Dados do Curso:</h2>
			<div class="form-group">
    			<label>Nome do Curso:</label>
    			<input type="text" class="form-control" name="nome_curso" placeholder="Nome Curso" required>
  			</div>
  			<div class="form-group">
    			<label>Período:</label>
    			<select name="sexo" class="form-control" required>
    				<option value="">Selecione o período</option>
    				<option value="Noturno">Noturno</option>
    				<option value="Manhã">Manhã</option>
				</select>
			</div>


  			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

		</form>
</body>
</html>