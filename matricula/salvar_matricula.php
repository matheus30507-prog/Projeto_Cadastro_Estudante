<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../conexao.php";

$aluno = $_POST['aluno'];
$curso = $_POST['curso'];

$banco = $conexao->selectDatabase("EstudanteDB");

$colecao = $banco->selectCollection("matriculas");

$filtro = [
    'aluno' => $aluno,
    'curso' => $curso
];

$matriculaExistente = $colecao->findOne($filtro);

if ($matriculaExistente) {
    header("Location: matricula.php?erro=duplicado");
    exit;
}

$colecao->insertOne([
    'aluno'  => $aluno,
    'curso' => $curso,
]);

header("Location: matricula.php?sucesso=1");
exit;