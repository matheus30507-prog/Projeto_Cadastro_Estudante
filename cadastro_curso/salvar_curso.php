<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../conexao.php";

$nome_curso = $_POST['nome_curso'];
$periodo = $_POST['periodo'];
$modalidade_ensino = $_POST['modalidade_ensino'];
$duracao = $_POST['duracao'];
$nivel_ensino = $_POST['nivel_ensino'];

$banco = $conexao->selectDatabase("EstudanteDB");

$colecao = $banco->selectCollection("cursos");

$colecao->insertOne([
    'nome_curso'  => $nome_curso,
    'periodo' => $periodo,
    'modalidade_ensino' => $modalidade_ensino,
    'duracao' => $duracao,
    'nivel_ensino' => $nivel_ensino
]);

header("Location: curso.php?sucesso=1");
exit;