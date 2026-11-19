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

	<?php if (isset($_GET['sucesso'])): ?>
    	<div class="alert alert-success text-center mt-3 mx-auto" style="max-width: 900px;">
        	Curso cadastrado!
    	</div>
	<?php endif; ?>

		<form class="alinhamento" method="POST" action="salvar_curso.php">
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
    				<option value="">Selecione o Nível de Ensino</option>
    				<option value="Graduação">Graduação</option>
    				<option value="Pós-Graduação">Pós-Graduação</option>
    				<option value="Tecnico">Tecnico</option>
				</select>
			</div>



  			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

		</form>

		<div style="width:100%; max-width:1100px; margin:30px auto; padding:0 15px; overflow-x:auto;">
		<?php
		require_once __DIR__ . '/../conexao.php';
		$bancoTabela = $conexao->selectDatabase("EstudanteDB");
		$listaCursos = $bancoTabela->selectCollection('cursos')->find();
		?>
		<h3>Cursos cadastrados:</h3>
		<table class="table table-striped table-bordered">
			<thead class="table-dark">
				<tr>
					<th>Nome do Curso</th>
					<th>Período</th>
					<th>Modalidade</th>
					<th>Duração</th>
					<th>Nível de Ensino</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($listaCursos as $c): ?>
					<tr>
						<td><?= htmlspecialchars($c['nome_curso'] ?? '') ?></td>
						<td><?= htmlspecialchars($c['periodo'] ?? '') ?></td>
						<td><?= htmlspecialchars($c['modalidade_ensino'] ?? '') ?></td>
						<td><?= htmlspecialchars($c['duracao'] ?? '') ?></td>
						<td><?= htmlspecialchars($c['nivel_ensino'] ?? '') ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
</body>
</html>