<?php

class Pet {

    //atributos
    private $idade;
    private $nome;
    private $peso;
    private $raca;
    private $dono;

    //gets e sets
    public function getIdade() {
        return $this->idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `idade`, `nome`, `peso`, 'raca' ,'dono' FROM `tb_pet`";

        return $array;
    }

    #inserir

    public function inserir($nome, $peso) {

        $sql = "INSERT INTO `tb_pet`(`nome`, `peso` ,'raca') VALUES ($nome,$peso,$raca)";

        return true;
    }

    #alterar

    public function alterar($idade, $peso, $raca) {


        $sql = "UPDATE `tb_pet` SET `especie`=$peso WHERE idade=$idade";

        return true;
    }

    #excluir

    public function excluir($idade) {

        $sql = "DELETE FROM `tb_pet` WHERE idade=$idade";

        return true;
    }

}

?>
