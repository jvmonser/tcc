<?php

class Pet {

    //atributos
    private $idade;
    private $nome;
    private $peso;
    private $raça;
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

    public function getRaça() {
        return $this->raça;
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

      public function setRaça($raça): void {
        $this->raça = $raça;
    }
    
    public function setDono($dono): void {
        $this->dono = $dono;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `idade`, `nome`, `peso`, 'raça' ,'dono' FROM `tb_pet`";

        return $array;
    }

    #inserir

    public function inserir($nome, $peso) {

        $sql = "INSERT INTO `tb_pet`(`nome`, `peso` ,'raça') VALUES ($nome,$peso,$raça)";

        return true;
    }

    #alterar

    public function alterar($idade, $peso, $raça) {


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
