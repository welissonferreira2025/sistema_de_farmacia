<?php
    require_once '../conexao.php';
    require_once 'codigo_cadastrar';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de remédios</title>
</head>
<body>

    <form action="codigo_cadastrar" method="POST">
        <h1>Cadastro de remédios</h1>

        <hr>
        <input type="hidden" name = "id">

        <label for="">Nome:</label>
        <input type="text" id="nome" name = "nome" required>

        <label for="">Comprimido_gota:</label>
        <input type="text" id="comprimido_gota" name = "comprimido_gota" required>

        <label for="">Originalidade:</label>
        <input type="text" id = "originalidade" name = "originalidade" required>

        <label for="">Tamanho:</label>
        <input type="text" id = "tamanho" name = "tamanho" required>

        <label for="">Preço:</label>
        <input type="text" id = "preco" name = "preco" required>

        <input type="submit" value="Salvar">

        <hr>
    </form>
</body>
</html>