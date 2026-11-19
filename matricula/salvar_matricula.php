<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../conexao.php";

$aluno = $_POST['aluno'];
$curso = $_POST['curso'];

$banco = $conexao->selectDatabase("EstudanteDB");

$colecao = $banco->selectCollection("matriculas");

$colecao->insertOne([
    'aluno'  => $aluno,
    'curso' => $curso,
]);

header("Location: matricula.php?sucesso=1");
exit;