<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli('localhost', 'root' , '', 'locadora');
    }

    public function setVeiculo($marca,$modelo,$ano,$cor,$preco){
        $stmt = $this->mysqli->prepare("INSERT INTO veiculos (`marca`, `modelo`, `ano`, `cor`, `preco`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$marca,$modelo,$ano,$cor,$preco);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getVeiculo(){
        $result = $this->mysqli->query("SELECT * FROM veiculos");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteVeiculo($id){
        if($this->mysqli->query("DELETE FROM `veiculos` WHERE `marca` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaVeiculo($id){
        $result = $this->mysqli->query("SELECT * FROM veiculos WHERE marca='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateVeiculo($marca,$modelo,$ano,$cor,$preco,$flag,$id){
        $stmt = $this->mysqli->prepare("UPDATE `veiculos` SET `marca` = ?, `modelo`=?, `ano`=?, `cor`=?, `preco` = ?, `flag`=? WHERE `marca` = ?");
        $stmt->bind_param("sssssss",$marca,$modelo,$ano,$cor,$preco,$flag,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
