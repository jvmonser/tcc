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

        $sql = "SELECT `id`, `senha` FROM `tb_cliente`";

        return $array;
    }

    #inserir

    public function inserir($id, $senha) {

        $sql = "INSERT INTO `tb_usuario`(`id`, `senha`) VALUES ($nome,$cpf)";

        return true;
    }

    #alterar

    public function alterar($id, $senha) {


        $sql = "UPDATE `tb_usuario` SET `senha`=$senha WHERE id=$id";

        return true;
    }

    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `tb_usuario` WHERE id=$id";

        return true;
    }

}

?>
