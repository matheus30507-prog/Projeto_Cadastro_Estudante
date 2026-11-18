<?php 

require_once "../conexao.php"

$nome = $_POST['nome_estudante'];
$data_nascimento = $_POST['data_nascimento']
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$e = $_POST['endereco'];

$endereco_completo = implode(', ', [
    $e['rua'],
    $e['numero_casa'],
    $e['cidade'],
    $e['estado'],
    $e['cep']
]);




$banco = $conexao->selectDatabase("EstudanteDB")

$colecao = $banco->selectCollection("estudantes")