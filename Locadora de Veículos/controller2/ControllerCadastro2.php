<?php
require_once("../model2/cadastroVeiculo2.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setMarca($_POST['marca']);
        $this->cadastro->setModelo($_POST['modelo']);
        $this->cadastro->setAno($_POST['ano']);
        $this->cadastro->setCor($_POST['cor']);
        $this->cadastro->setPreco($_POST['preco']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view2/cadastro2.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o veículo não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
