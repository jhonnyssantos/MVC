<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $flag;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setFlag($string){
        $this->flag = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getFlag(){
        return $this->flag;
    }


    public function incluir(){
        return $this->setClientes($this->getNome(),$this->getEmail(),$this->getTelefone(),$this->getEndereco());
    }
}
?>
