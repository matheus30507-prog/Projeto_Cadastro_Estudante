<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Estudante</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  		<span class="navbar-brand mb-0 h1">Cadastro de Estudantes:</span>
  		<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="../index.php">Voltar</a>
      		</li>
      	</ul>
	</nav>

	<?php if (isset($_GET['sucesso'])): ?>
    	<div class="alert alert-success text-center mt-3 mx-auto" style="max-width: 900px;">
        	Aluno cadastrado!
    	</div>
	<?php endif; ?>

		<form class="alinhamento" method="POST" action="salvar_estudante.php">
			<h2>Dados do Estudante:</h2>
			<div class="form-group">
    			<label>Nome:</label>
    			<input type="text" class="form-control" name="nome_estudante" placeholder="Nome" required>
  			</div>

  			<div class="form-group">
    			<label>Data de Nascimento:</label>
    			<input type="date" class="form-control" name="data_nascimento" required>
  			</div>

  			<div class="form-group">
    			<label>Sexo:</label>
    			<select name="sexo" class="form-control" required>
    				<option value="">Selecione o sexo</option>
    				<option value="masculino">Masculino</option>
    				<option value="feminino">Feminino</option>
    				<option value="nao_informar">Não Informar</option>
				</select>
			</div>

			<div class="form-group">
    			<label>Registro Acadêmico:</label>
    			<input type="text" class="form-control" name="RA" placeholder="R.A" required>
  			</div>

  			<div class="form-group">
    			<label>Email:</label>
    			<input type="email" class="form-control" name="email" placeholder="Email" required>
  			</div>

  			<hr>
  			<p style="font-weight: bold;">Cadastrar Endereço:</p>

  			<div class="form-group">
    			<label>Cidade:</label>
    			<input type="text" class="form-control" name="endereco[cidade]" placeholder="Cidade" required>
  			</div>

  			<div class="form-group">
    			<label>Rua:</label>
    			<input type="text" class="form-control" name="endereco[rua]" placeholder="Rua" required>
  			</div>

  			 <div class="form-group">
    			<label>Estado:</label>
    			<input type="text" class="form-control" name="endereco[estado]" placeholder="Estado Ex.(SP)" required>
  			</div>

  			<div class="form-group">
    			<label>Número da casa:</label>
    			<input type="text" class="form-control" name="endereco[numero_casa]" placeholder="Numero" required>
  			</div>

  			<div class="form-group">
    			<label>CEP:</label>
    			<input type="text" class="form-control" name="endereco[cep]" placeholder="CEP XXXXX-XXX" required>
  			</div>

  			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

		</form>
</body>
</html>