<?php
require_once("../model2/banco2.php");

class editarController {

    private $editar;
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco;
    private $flag;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaLivro($id);
        $this->marca         =$row['marca'];
        $this->modelo        =$row['modelo'];
        $this->ano   =$row['ano'];
        $this->cor        =$row['cor'];
        $this->preco         =$row['preco'];
        $this->flag         =$row['flag'];

    }
    public function editarFormulario($marca,$modelo,$ano,$cor,$preco,$flag,$id){
        if($this->editar->updateVeiculo($marca,$modelo,$ano,$cor,$preco,$flag,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view2/index2.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
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


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['marca'],$_POST['modelo'],$_POST['ano'],$_POST['cor'],$_POST['preco'],$_POST['flag'],$_POST['id']);
}
?>
