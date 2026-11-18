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
    			<select name="periodo" class="form-control" required>
    				<option value="">Selecione o período</option>
    				<option value="Noturno">Noturno</option>
    				<option value="Manhã">Manhã</option>
				</select>
			</div>

			<div class="form-group">
    			<label>Modalidade de Ensino:</label>
    			<select name="modalidade_ensino" class="form-control" required>
    				<option value="">Selecione a modalidade</option>
    				<option value="Presencial">Presencial</option>
    				<option value="EAD">EAD</option>
    				<option value="Semi-Presencial">Semi-Presencial</option>
				</select>
			</div>

			<div class="form-group">
    			<label>Duração:</label>
    			<select name="duracao" class="form-control" required>
    				<option value="">Selecione a Duração</option>
    				<option value="1 Ano">1 Ano</option>
    				<option value="2 Anos">2 Anos</option>
    				<option value="3 Anos">3 Anos</option>
    				<option value="4 Anos">4 Anos</option>
    				<option value="5 Anos">5 Anos</option>
				</select>
			</div>

			<div class="form-group">
    			<label>Nivel de Ensino:</label>
    			<select name="nivel_ensino" class="form-control" required>
    				<option value="">Selecione a Duração</option>
    				<option value="Graduação">Graduação</option>
    				<option value="Pós-Graduação">Pós-Graduação</option>
    				<option value="Tecnico">Tecnico</option>
				</select>
			</div>



  			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

		</form>
</body>
</html>