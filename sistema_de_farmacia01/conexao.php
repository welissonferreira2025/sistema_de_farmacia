<?php
    $usuario = "root";
    $senha = "";
    $database = "farmacia";
    $host = "localhost";

    try {
        $conexao = new PDO("mysql:host = localhost; dbname = farmacia; charset = utf8mb4",
        "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
}
    catch (PDOException $erro) {
        echo "Erro na conexão: " . $erro->getMessage();
}
?>