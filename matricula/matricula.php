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

	<?php if (isset($_GET['sucesso'])): ?>
    	<div class="alert alert-success text-center mt-3 mx-auto" style="max-width: 900px;">
        	Matricula Realizada!
    	</div>
	<?php endif; ?>

	<form class="alinhamento" method="POST" action="salvar_matricula.php">
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

	<div style="width:100%; max-width:1100px; margin:30px auto; padding:0 15px; overflow-x:auto;">
		<?php
		$bancoTabela = $conexao->selectDatabase("EstudanteDB");
		$listaAlunos = $bancoTabela->selectCollection('estudantes')->find();
		$listaCursos = $bancoTabela->selectCollection('cursos')->find();
		$listaMatriculas = $bancoTabela->selectCollection('matriculas')->find();

		$nomesCursos = [];
		foreach ($listaCursos as $c) {
			$nomesCursos[(string) $c['_id']] = $c['nome_curso'];
		}

		$cursosPorAluno = [];
		foreach ($listaMatriculas as $m) {
			$idCurso = (string) $m['curso'];
			if (isset($nomesCursos[$idCurso])) {
				$cursosPorAluno[(string) $m['aluno']][] = $nomesCursos[$idCurso];
			}
		}
		?>
		
	</div>

</body>
</html>