<?php
    require_once '../conexao.php';

    if (isset($_POST['id'], $_POST['nome'], $_POST['comprimido_gota'], $_POST['originalidade'], $_POST['tamanho'], $_POST['preco'])) {

        $id = $_POST ["id"];
        $nome = $_POST ["nome"];
        $comprimido_gota = $_POST ["comprimido_gota"];
        $originalidade = $_POST ["originalidade"];
        $tamanho = $_POST ["tamanho"];
        $preco = $_POST ["preco"];

        if (!empty($id) && !empty($nome) && !empty($preco) && !empty($comprimido_gota) && !empty($originalidade) && !empty($tamanho)) {

            $stmt = $conexao -> prepare("INSERT INTO contatos (nome, comprimido_gota, originalidade, tamanho, preco) VALUES
            (:nome, :comprimido_gota, :originalidade, :tamanho, :preco)");

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':comprimido_gota', $comprimido_gota);
            $stmt->bindValue(':originalidade', $originalidade);
            $stmt->bindValue(':tamanho', $tamanho);
            $stmt->bindValue(':preco', $preco);

            $stmt->execute();

                echo "Dados cadastrados com sucesso!";

            }else {
                        echo "Erro ao tentar efetivar cadastro";
            }
        }else{
                echo"Preencha todos os campos";
        }

?>