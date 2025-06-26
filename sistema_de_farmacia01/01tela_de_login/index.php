<?php
    include_once 'login.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="login.php" method="POST" name="login" id="login">

        <label>E-mail</label>
        <input type ="text" id ="email" name ="email">
        <br>

        <label>Senha</label>
        <input type ="password" id ="senha" name = "senha">
        <br>

        <input type="submit" value = "Entrar">
    </form>

</body>
</html>