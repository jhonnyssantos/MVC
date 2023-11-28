<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli('localhost', 'root' , 'Etec@12345', 'locadora');
    }

    public function setCliente($nome,$email,$telefone,$endereco,){
        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`, `email`, `telefone`, `endereco`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$nome,$email,$telefone,$endereco);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteClientes($id){
        if($this->mysqli->query("DELETE FROM `clientes` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaClientes($id){
        $result = $this->mysqli->query("SELECT * FROM clientes WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateClientes($nome,$email,$telefone,$endereco,$flag,$id){
        $stmt = $this->mysqli->prepare("UPDATE `clientes` SET `nome` = ?, `email`=?, `telefone`=?, `endereco`=?, `flag`=?, WHERE `nome` = ?");
        $stmt->bind_param("ssssss",$nome,$email,$telefone,$endereco,$flag,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
