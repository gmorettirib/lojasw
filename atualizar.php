<?php
    require 'conexao.php';
   
    $id = 1;
    $novoPreco = 149.99;
    
    $sql = "UPDATE produtos SET preco = :preco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':preco', $novoPreco);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "<script>alert('Produto atualizado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao atualizar produto.');</script>";
    }
?>