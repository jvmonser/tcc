<?php

class Login {

    //atributos
    private $id;
    private $email;
    private $senha;

    //gets e sets
    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `id`, `email`, `senha` FROM `tb_login`";

        return $array;
    }

    #inserir

    public function inserir($email, $senha) {

        $sql = "INSERT INTO `tb_login`(`email`, `senha`) VALUES ($email,$senha)";

        return true;
    }

    #alterar

    public function alterar($id, $senha) {


        $sql = "UPDATE `tb_login` SET `senha`=$senha WHERE id=$id";

        return true;
    }

    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `tb_login` WHERE id=$id";

        return true;
    }

}

?>