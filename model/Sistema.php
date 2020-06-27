<?php

class Sistema {

    //atributos
    private $consultarusuarios;
    private $servicos;

    //gets e sets
    public function getConsultarusuarios() {
        return $this->consultarusuarios;
    }

    public function getServicos() {
        return $this->servicos;
    }

    public function setConsultarusuarios($id): void {
        $this->consultarusuarios = $consultar;
    }

    public function setServicos($servicos): void {
        $this->servicos = $servicos;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `consultarusuario`, `servicos` FROM `tb_cliente`";

        return $array;
    }

    #inserir

    public function inserir($consultar, $servicos) {

        $sql = "INSERT INTO `tb_usuario`(`consultarusuario`, `servicos`) VALUES ($consultar,$servicos)";

        return true;
    }

    #alterar

    public function alterar($consultar, $servicos) {


        $sql = "UPDATE `tb_usuario` SET `servicos`=$servicos WHERE consultarusuario=$consultar";

        return true;
    }

    #excluir

    public function excluir($consultar) {

        $sql = "DELETE FROM `tb_usuario` WHERE consultar=$consultar";

        return true;
    }

}
?>

