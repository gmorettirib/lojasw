<?php
require 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "<script>
        alert('Produto excluído com sucesso!');
        window.location.href = 'listar.php';
    </script>";
} else {
    echo "<script>
        alert('Erro ao excluir produto.');
        window.location.href = 'listar.php';
    </script>";
}
?>
