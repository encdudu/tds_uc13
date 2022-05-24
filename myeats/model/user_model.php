<?php

    require_once "../util/database.php";

class UserModel {

    public function create($nome, $email, $senha, $endereco) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (nome, endereco, email, senha) VALUES(:nome, :endereco, :email, :senha)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO USER (name, email, password, address) VALUES (:nome, :email, :senha, :endereco)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['nome'=>$nome, 'email'=>$email, 'senha'=>sha1($senha), 'endereco'=>$endereco]); //nome entre aspas deve ser o mesmo nome que está nos VALUES
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
