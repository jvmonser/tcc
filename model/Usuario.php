<?php

class Usuario {

    //atributos
    private $id;    
    private $senha;

    //gets e sets
    public function getId() {
        return $this->id;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `id`, `senha` FROM `usuario`";

        return $array;
    }

    #inserir

    public function inserir($id, $senha) {

        $sql = "INSERT INTO `usurio`(`id`, `senha`) VALUES ($nome,$cpf)";

        return true;
    }

    #alterar

    public function alterar($id, $senha) {


        $sql = "UPDATE `usuario` SET `senha`=$senha WHERE id=$id";

        return true;
    }

    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `usuario` WHERE id=$id";

        return true;
    }

}

?>
