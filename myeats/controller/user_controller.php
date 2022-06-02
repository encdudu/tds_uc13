<?php
    require_once "../model/user_model.php";


    if (isset($_POST['name']) || !empty($_POST['name'])){
        $name = $_POST['name'];
    }
    else{
        echo "Campo Nome não preenchido";
    }

    if (isset($_POST['address']) || !empty($_POST['address'])){
        $address = $_POST['address'];
    }
    else{
        echo "Campo Endereço não preenchido";
    }

    if (isset($_POST['email']) || !empty($_POST['email'])){
        $email = $_POST['email'];
    }
    else{
        echo "Campo e-mail não preenchido";
    }

    if (isset($_POST['password']) || !empty($_POST['password'])){
        $password = $_POST['password'];

    }
    else{
        echo "Campo senha não preenchido";
    }

    if (isset($_POST['confSenha']) || !empty($_POST['confSenha'])){
        $confSenha = $_POST['confSenha'];

    }
    else{
        echo "Campo confirmação de senha não preenchido";
    }

    if ($password === $confSenha){
        echo "login";

    } else {
        echo "Campos diferentes"; 
    }


    $userModel = new UserModel(); //new cria(instancia) o objeto
    $userModel -> create($name, $email, $address, $password); // -> chamando a função create


?>