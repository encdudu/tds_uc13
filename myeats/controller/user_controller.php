<?php
    require_once "../model/user_model.php";

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confSenha = $_POST["confSenha"];

    $userModel = new UserModel(); //new cria(instancia) o objeto
    $userModel -> create($nome, $endereco, $email, $senha); // -> chamando a função create


?>