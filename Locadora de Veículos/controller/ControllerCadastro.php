<?php
require_once("../model/cadastroCliente.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o cliente não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
