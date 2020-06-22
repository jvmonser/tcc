<?php

class Usuario {

    //atributos
    private $consultarusuario;    
    private $serviços;

    //gets e sets
    public function getConsultarusuario() {
        return $this->consultarusuario;
    }

    public function getServiços() {
        return $this->serviços;
    }

    public function setConsultarusuario($id): void {
        $this->consultarusuario = $consultar;
    }

    public function setServiços($serviços): void {
        $this->serviços = $serviços;
    }

    //metodos do CRUD
    #consultar
    public function consultar() {

        $sql = "SELECT `consultarusuario`, `serviços` FROM `tb_cliente`";

        return $array;
    }

    #inserir

    public function inserir($consultar, $serviços) {

        $sql = "INSERT INTO `tb_usuario`(`consultarusuario`, `serviços`) VALUES ($consultar,$serviços)";

        return true;
    }

    #alterar

    public function alterar($consultar, $serviços) {


        $sql = "UPDATE `tb_usuario` SET `serviços`=$serviços WHERE consultarusuario=$consultar";

        return true;
    }

    #excluir

    public function excluir($consultar) {

        $sql = "DELETE FROM `tb_usuario` WHERE consultar=$consultar";

        return true;
    }

}

?>

