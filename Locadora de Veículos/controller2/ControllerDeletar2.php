<?php
require_once("../model2/banco2.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteVeiculo($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view2/index2.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>
