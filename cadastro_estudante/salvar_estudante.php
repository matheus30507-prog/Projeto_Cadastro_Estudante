<?php 

require_once "../conexao.php"

$nome = $_POST['nome_estudante'];
$data_nascimento = $_POST['data_nascimento']
$curso = $_POST['curso'];


$banco = $conexao->selectDatabase("EstudanteDB")

$colecao = $banco->selectCollection("estudantes")