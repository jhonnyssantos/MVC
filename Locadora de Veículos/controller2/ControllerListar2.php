<?php
require_once("../model2/banco2.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getVeiculo();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['marca'] ."</th>";
            echo "<td>".$value['modelo'] ."</td>";
            echo "<td>".$value['ano'] ."</td>";
            echo "<td> R$:".$value['cor'] ."</td>";
            echo "<td>".$value['preco'] ."</td>";
            echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado":"Ativado" ."</td>";
            echo "<td><a class='btn btn-warning' href='editar2.php?id=".$value['marca']."'>Editar</a><a class='btn btn-danger' href='../controller2/ControllerDeletar2.php?id=".$value['marca']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

