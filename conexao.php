<?php
require_once __DIR__ . '/vendor/autoload.php';

use MongoDB\Driver\ServerApi;

$uri = //COLE_AQUI_A_STRING_DE_CONEXAO;

$apiVersion = new ServerApi(ServerApi::V1);

$conexao = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
try {
    $conexao->selectDatabase('admin')->command(['ping' => 1]);
} catch (Exception $e) {
    printf($e->getMessage());
}