<?php
    session_start();
    if ($_SESSION["logado"] != true){
        header("Location: ../util/login_view.php");
    }
?>