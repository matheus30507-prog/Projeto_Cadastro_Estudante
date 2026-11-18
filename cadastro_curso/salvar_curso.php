<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../conexao.php";

$nome_curso = $_POST['nome_curso'];
$periodo = $_POST['periodo'];
$modalidade_ensino = $_POST['modalidade_ensino'];
$duracao = $_POST['duracao'];
$nivel_ensino = $_POST['nivel_ensino'];