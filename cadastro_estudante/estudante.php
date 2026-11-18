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
	</nav>

		<form class="alinhamento">
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
    			<label>Telefone:</label>
    			<input type="tel" class="form-control" name="telefone" placeholder="(xx) xxxxxxxxx" required>
  			</div>

  			<div class="form-group">
    			<label>Email:</label>
    			<input type="email" class="form-control" name="email" placeholder="Email" required>
  			</div>
  			
		</form>
</body>
</html>