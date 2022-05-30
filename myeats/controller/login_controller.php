<?php
    require_once "../model/login_model.php";
    

    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    else {
        $email = null;
        $password = null;
    }

    $loginModel = new loginModel(); //new cria(instancia) o objeto
    $loginModel -> login($email, $password); // -> chamando a função create


?>