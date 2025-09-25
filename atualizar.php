<?php
    
    require 'conexao.php'; 

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $preco_novo = $_POST['preco_novo'];
    $quantidade_novo = $_POST['quantidade_novo'];

    $sql = "UPDATE produtos SET nome = :nome_novo, preco = :preco_novo, quantidade = :quantidade_novo WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome_novo', $nome_novo);
    $stmt->bindParam(':preco_novo', $preco_novo);
    $stmt->bindParam(':quantidade_novo', $quantidade_novo);

    if ($stmt->execute()) {
        echo "<script>
        alert('Produto atualizado com sucesso!');
        window.location.href = 'listar.php';
        </script>";
    } else {
        echo "<script>
        alert('Erro ao atualizar produto.');
        window.location.href = 'listar.php';
        </script>";
    }
?>