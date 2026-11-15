<?php
use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://matheus30507_db_user:MM123456@estudantedb.blzhkwp.mongodb.net/';

$apiVersion = new ServerApi(ServerApi::V1);

$conexao = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
try {
    $conexao->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}