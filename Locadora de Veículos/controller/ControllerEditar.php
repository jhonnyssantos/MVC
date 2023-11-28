<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $flag;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaClientes($id);
        $this->nome         =$row['nome'];
        $this->email        =$row['email'];
        $this->telefone   =$row['telefone'];
        $this->endereco        =$row['endereco'];
        $this->flag         =$row['flag'];

    }
    public function editarFormulario($nome,$email,$telefone,$endereco,$flag,$id){
        if($this->editar->updateClientes($nome,$email,$telefone,$endereco,$flag,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
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


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['endereco'],$_POST['flag'],$_POST['id']);
}
?>
