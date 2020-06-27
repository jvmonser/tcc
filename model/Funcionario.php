<?php

class Funcionario {

    //atributos
    private $id;
    private $nome;
    private $cpf;
    private $senha;
    private $endereco;
    private $dtnascimento;
    private $telefone;
    private $email;

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

    public function getSenha() {
        return $this->senha;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getDtnascimento() {
        return $this->dtnascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
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

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setDtnascimento($dtnascimento): void {
        $this->dtnascimento = $dtnascimento;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    //metodos do CRUD
    #inserir

    public function inserir($email, $senha) {

        $sql = "INSERT INTO `Funcionario`(`email`, `senha`) VALUES ($email,$senha)";

        return true;
    }

    #alterar

    public function alterar($id, $senha) {


        $sql = "UPDATE `Funcionario` SET `senha`=$senha WHERE id=$id";

        return true;
    }

    #consultar
    public function consultar() {

        $sql = "SELECT `id`, `email`, `senha` FROM `Funcionario`";

        return $array;
    }
    
    #excluir

    public function excluir($id) {

        $sql = "DELETE FROM `Funcionario` WHERE id=$id";

        return true;
    }

}

?>
