<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Matrícula de Estudantes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php 
	require_once __DIR__ . '/../conexao.php'; 

	$banco = $conexao->selectDatabase("EstudanteDB");
	$colecaoEstudantes = $banco->selectCollection('estudantes');
	$colecaoCursos = $banco->selectCollection('cursos');

	$estudantes = $colecaoEstudantes->find([], [
    	'sort' => ['nome' => 1]
	]);

	$cursos = $colecaoCursos->find([], [
    	'sort' => ['nome' => 1]
	]);

?>
	<nav class="navbar navbar-dark bg-dark">
  		<span class="navbar-brand mb-0 h1">Cadastro de Cursos:</span>
  		<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="../index.php">Voltar</a>
      		</li>
      	</ul>
	</nav>

	<form class="alinhamento" method="POST" action="salvar_curso.php">
		<h2>Matrícula:</h2>

		<label>Selecione o aluno:</label>
        <select name="aluno" required>
            <option value="">Escolha um aluno</option>

            <?php foreach ($estudantes as $aluno): ?>

                <option value="<?= $aluno['_id'] ?>">
                    <?= htmlspecialchars($aluno['nome_estudante']) ?>
                </option>

            <?php endforeach; ?>
        </select>

        <br>

        <label>Selecione o curso:</label>
        <select name="curso" required>
            <option value="">Escolha um curso</option>

            <?php foreach ($cursos as $curso): ?>

                <option value="<?= $curso['_id'] ?>">
                    <?= htmlspecialchars($curso['nome_curso']) ?>
                </option>

            <?php endforeach; ?>

        </select>


  		<button type="submit" class="btn btn-primary btn-sm">Matricular</button>

	</form>

</body>
</html>