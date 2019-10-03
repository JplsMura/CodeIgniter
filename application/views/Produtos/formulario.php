<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" <?php echo base_url("css/bootstrap.css") ?> ">

    <title>Produtos</title>
</head>

<body>

    <div class="container">

        <?php if ($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if ($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>


        <h1>Cadastro de Novos Produtos</h1><br><br>

        <form method="POST" enctype="multipart/form-data" action="index.php/Produtos/novo">

            <label>Nome</label>
            <input type="text" id="nome_prod" name="nome" placeholder="Digite o Nome do Produto que será cadastrado" class="form-control"><br>

            <div class="form-group">
                <label>Descrição do Produto</label>
                <textarea type="text" class="form-control" id="descricao_prod" name="descricao" rows="3"></textarea>
            </div><br>

            <label>Quantidade</label>
            <input type="text" id="quantidade_prod" name="quantidade" placeholder="Digite a Quantidade do Produto" class="form-control"><br>

            <label>Preço</label>
            <input type="text" id="preco_prod" name="preco" placeholder="Digite o Preço do Produto" class="form-control"><br>

            <?= anchor($uri = "Produtos/novo", $title = "Cadastrar", array("class" => "btn btn-primary")) ?>

            <!-- <input class="btn btn-primary" type="submit" value="Cadastrar">  -->

        </form>
    </div>

</body>

</html>