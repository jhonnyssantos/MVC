<!DOCTYPE HTML>
<html>
<?php include("head2.php") ?>

<body>
    <?php include("menu2.php") ?>
    <?php require_once("../controller2/ControllerEditar2.php");?>
    <div class="row">
        <form method="post" action="../controller2/ControllerEditar2.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="marca" name="marca" value="<?php echo $editar->getMarca(); ?>" required autofocus>
                <input class="form-control" type="text" id="modelo" name="modelo" value="<?php echo $editar->getModelo(); ?>" required>
                <input class="form-control" type="number" id="ano" name="ano" value="<?php echo $editar->getAno(); ?>" required>
                <input class="form-control" type="text" id="cor" name="cor" value="<?php echo $editar->getCor(); ?>" required>
                <input class="form-control" type="text" id="preco" name="preco" value="<?php echo $editar->getPreco(); ?>" required>
                <select name="flag">
                    <?php $c = $editar->getFlag();?>
                    <option value="<?php echo $editar->getFlag();?>"><?php echo  ($editar->getFlag()== 0)? "Desativado" :"Ativado" ?></option>
                    <option value="<?php echo ($c == 0)? "1" : "0" ?>"><?php echo ($editar->getFlag()!= 0)? "Desativado" :"Ativado" ?></option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getMarca();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      <script language="javascript" type="text/javascript">

        function validar(formulario) {
            var quantidade = form.quantidade.value;
            var preco = form.preco.value;
            for (i = 0; i <= formulario.length - 2; i++) {
                if ((formulario[i].value == "")) {
                    alert("Preencha o campo " + formulario[i].name);
                    formulario[i].focus();
                    return false;
                }
            }
            if (ano <= 0) {
                alert('O ano do veículo não pode ser igual ou inferior a 0');
                form.quantidade.focus();
                return false;
            }
            if (preco <= 0) {
                alert('O preço do veículo não pode ser igual ou infeiror a 0');
                form.preco.focus();
                return false;
            }
            formulario.submit();
        }

    </script>
</body>

</html>
