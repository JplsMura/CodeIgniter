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

    <title>HOME</title>
</head>

<body>

    <div class="container">

        <?php if ($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if ($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>

        <?php if ($this->session->userdata("usuario logado")) : ?>

            <h1>Produtos</h1>

            <table class="table">

                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>

                <?php foreach ($produtos as $produto) : ?>

                    <tr>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['descricao'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <td><?= reais($produto['preco']) ?></td>

                    </tr>

                <?php endforeach ?>

            </table>

            <?= anchor($uri = "Produtos/formulario", $title = "Novo Produto", array("class" => "btn btn-primary")) ?>

            <?= anchor($uri = "login/logout", $title = "Sair", array("class" => "btn btn-primary")) ?>

        <?php else : ?>

            <h1>Login</h1>

            <form method="POST" action="Login/autenticar">

                <label>Email</label>
                <input type="email" id="email_logar" name="email_logar" placeholder="Digite seu Email" class="form-control"><br>

                <label>Senha</label>
                <input type="password" id="senha_logar" name="senha_logar" placeholder="Digite sua Senha" class="form-control"><br>

                <input class="btn btn-primary" type="submit" value="Login"><br>
            </form><br><br>


            <h1>Cadastro de Novo Usuário</h1>

            <form method="POST" action="Usuarios/novo">

                <label>Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" class="form-control"><br>
°
                <label>Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu Email" class="form-control"><br>

                <label>Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua Senha" class="form-control"><br>

                <input class="btn btn-primary" type="submit" value="Cadastrar"><br>
            </form>

            <!--
        // echo form_open($action = "usuarios/novo");

        // echo form_label($label_text: "Nome", id: "nome");

        // echo form_input(array(
        //     "name" => "nome",
        //     "id" => "nome",
        //     "class" => "form-control",
        //     "maxlength" => "255"
        // ));

        // echo form_label(label_text = "Email", id = "email");

        // echo form_input(array(
        //     "email" => "email",
        //     "id" => "email",
        //     "class" => "form-control",
        //     "maxlength" => "255"
        // ));

        // echo form_label(label_text = "Senha", id = "senha");

        // echo form_password(array(
        //     "senha" => "senha",
        //     "id" => "senha",
        //     "class" => "form-control",
        //     "maxlength" => "255"
        // ));

        // echo form_close();
        // ?>
        -->

    </div>

<?php endif ?>

</body>

</html>