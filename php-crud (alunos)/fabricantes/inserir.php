<?php
    if( isset($_POST['inserir'])) {
        require_once "../src/funcoes-fabricantes.php";

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        inserirFabricante($conexao, $nome);

        header("location:listar.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fabricantes - Inserir</title>
    </head>
    <body>
        <div class="container">
            <h1>Fabricantes | Insert</h1>
            <hr>

            <form action="" method="post">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </p>
                <button type="submit" name="inserir">Inserir Fabricantes</button>
            </form>
        </div>

        <p><a href="listar.php">Voltar para a lista de fabricantes</a></p>
        <p><a href="../index.html">Home</a></p>
    
    </body>
</html>