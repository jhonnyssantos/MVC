<?php
require_once("banco2.php");

class Cadastro extends Banco {

    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco;
    private $flag;

    //Metodos Set
    public function setMarca($string){
        $this->marca = $string;
    }
    public function setModelo($string){
        $this->modelo = $string;
    }
    public function setAno($string){
        $this->ano = $string;
    }
    public function setCor($string){
        $this->cor = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    public function setFlag($string){
        $this->flag = $string;
    }

    //Metodos Get
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFlag(){
        return $this->flag;
    }


    public function incluir(){
        return $this->setLivro($this->getMarca(),$this->getModelo(),$this->getAno(),$this->getCor(),$this->getPreco());
    }
}
?>