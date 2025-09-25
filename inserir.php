<?php
require 'conexao.php';
$nome = $_POST['nome'];
$preco =$_POST['preco'];
$quantidade = $_POST['quantidade'];
$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $quantidade);
if ($stmt->execute()) {
    echo "<script>
    alert('Produto inserido com sucesso!');
    window.location.href = 'listar.php';
    </script>";
} else {
    echo "<script>
    alert('Erro ao inserir produto.');
    window.location.href = 'listar.php';
    </script>";
}
