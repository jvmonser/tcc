<?php

class Pet {

    //atributos
    private $id;
    private $nome;
    private $especie;
    private $raça;

    //gets e sets
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function getRaça() {
        return $this->raça;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setEspecie($especie): void {
        $this->especie = $especie;
    }

      public function setRaça($raça): void {
        $this->raça = $raça;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `id`, `nome`, `especie`, 'raça' FROM `tb_pet`";

        return $array;
    }

    #inserir

    public function inserir($nome, $especie) {

        $sql = "INSERT INTO `tb_pet`(`nome`, `especie`,'raça') VALUES ($nome,$especie,$raça)";

        return true;
    }

    #alterar

    public function alterar($id, $especie, $raça) {


        $sql = "UPDATE `tb_pet` SET `especie`=$especie WHERE id=$id";

        return true;
    }

    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `tb_pet` WHERE id=$id";

        return true;
    }

}

?>
