<?php
    include 'pedaco.php';
?>

    <div class="container">
        <form action="atualizar.php" method="POST">

        <?php
            $id = $_GET['id'];
            echo "Valor passado: $id";
            require 'conexão.php';
            $sql = "SELECT * FROM produtos WHERE id = $id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);

            print_r($produto);
           
        ?>
            <div class="mb-3">
                Nome: <input type="text" value="<?php echo $produto['nome']?>" class="form-control" name="nome" >                
            </div>
            <div class="mb-3">
                Preço: <input type="text" value="<?php echo $produto['preco']?>" class="form-control" name="preco" >                
            </div>
            <div class="mb-3">
                Quantidade: <input type="text" value="<?php echo $produto['quantidade']?>" class="form-control" name="quantidade">                
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href='index.php' type='button' class='btn btn-danger'>HOME</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>