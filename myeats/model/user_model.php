<?php

class UserModel {

    public function create($nome, $endereco, $email, $senha) {
        echo "nome: ".$nome."<br>";
        echo "endereço: ".$endereco."<br>";
        echo "email: ".$email."<br>";
        echo "senha: ".$senha;
    }

    public function delete() {
        echo "delete";
    }

    public function update() {
        echo "update";
    }

    public function findAll() {
        echo "findAll";
    }

}
?>