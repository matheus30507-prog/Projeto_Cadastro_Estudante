<?php 

require_once "../conexao.php"


$banco = $conexao->selectDatabase("EstudanteDB")

$colecao = $banco->selectCollection("estudantes")