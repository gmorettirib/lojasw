<?php
    include 'pedaco.php';
    $id = $_GET['id'];
?>

    <div class="container">
        <form action="atualizar.php?id= <?php echo $id ?> " method="POST">

        <?php
            $id = $_GET['id'];
            
            require 'conexao.php';
            $sql = "SELECT * FROM produtos WHERE id = $id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);

            print_r($produto);
           
        ?>
            <div class="mb-3">
                Nome: <input type="text" value="<?php echo $produto['nome']?>" class="form-control" name="nome_novo" >                
            </div>
            <div class="mb-3">
                Preço: <input type="text" value="<?php echo $produto['preco']?>" class="form-control" name="preco_novo" >                
            </div>
            <div class="mb-3">
                Quantidade: <input type="text" value="<?php echo $produto['quantidade']?>" class="form-control" name="quantidade_novo">                
            </div>
            
            <a href='index.php' type='button' class='btn btn-custom-color'>HOME</a>
            <button type="submit" class="btn btn-custom-color">Cadastar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>