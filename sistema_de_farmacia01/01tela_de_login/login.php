<?php
    session_start();

    require_once "../conexao.php";
    require_once "index.php";

    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(!empty($_POST["email"]) && !empty($_POST["senha"])) {

            $sql = "SELECT * FROM administradores WHERE email = :email AND senha = :senha";
            $stmt = $conexao->prepare($sql);
            $stmt -> bindValue(":email", $email, PDO::PARAM_STR);
            $stmt -> bindValue(":senha", $senha, PDO::PARAM_STR);
            $stmt -> execute();

            $administrador = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($administrador) {
            $_SESSION['id'] = $administrador['id'];
            $_SESSION['email'] = $administrador['email'];
            $_SESSION['senha'] = $administrador['senha'];
            $_SESSION['nome'] = $administrador['nome'];

            header("Location: tela_incial.php");
            }else{
                    echo "Email ou senha inválidos.";
            }
        }else{
                echo "Preencha todos os campos.";
        }

    }else{
        header("Location: index.php");
    }
?>