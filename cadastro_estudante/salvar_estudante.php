<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../conexao.php";

$nome = $_POST['nome_estudante'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$RA = $_POST['RA'];
$email = $_POST['email'];
$e = $_POST['endereco'];

$endereco_completo = implode(', ', [
    $e['rua'],
    $e['numero_casa'],
    $e['cidade'],
    $e['estado'],
    $e['cep']
]);


$banco = $conexao->selectDatabase("EstudanteDB");

$colecao = $banco->selectCollection("estudantes");

$colecao->insertOne([
    'nome_estudante'  => $nome,
    'data_nascimento' => $data_nascimento,
    'sexo'            => $sexo,
    'RA'        => $RA,
    'email'           => $email,
    'endereco'        => $endereco_completo
]);

header("Location: estudante.php?sucesso=1");
exit;