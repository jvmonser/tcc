<?php

class Cliente {

    //atributos
    private $id;
    private $nome;
    private $cpf;

    //gets e sets
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `id`, `nome`, `cpf` FROM `tb_cliente`";

        return $array;
    }

    #inserir

    public function inserir($nome, $cpf) {

        $sql = "INSERT INTO `tb_cliente`(`nome`, `cpf`) VALUES ($nome,$cpf)";

        return true;
    }

    #alterar

    public function alterar($id, $cpf) {


        $sql = "UPDATE `tb_cliente` SET `cpf`=$cpf WHERE id=$id";

        return true;
    }

    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `tb_cliente` WHERE id=$id";

        return true;
    }

}

?>
