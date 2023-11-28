<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="email" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" required>
                <input class="form-control" type="tel" id="telefone" name="telefone" value="<?php echo $editar->getTelefone(); ?>" required>
                <input class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required>
                <select name="flag">
                    <?php $c = $editar->getFlag();?>
                    <option value="<?php echo $editar->getFlag();?>"><?php echo  ($editar->getFlag()== 0)? "Desativado" :"Ativado" ?></option>
                    <option value="<?php echo ($c == 0)? "1" : "0" ?>"><?php echo ($editar->getFlag()!= 0)? "Desativado" :"Ativado" ?></option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar Cliente</button>
            </div>
        </form>
    </div>

      <script language="javascript" type="text/javascript">
        function validar(formulario) {
            var telefone = form.telefone.value;
            var preco = form.preco.value;
            for (i = 0; i <= formulario.length - 2; i++) {
                if ((formulario[i].value == "")) {
                    alert("Preencha o campo " + formulario[i].name);
                    formulario[i].focus();
                    return false;
                }
            }
            if (telefone <= 0) {
                alert('O telefone não pode ser igual ou inferior a 0');
                form.telefone.focus();
                return false;
            }
            formulario.submit();
        }

    </script>
</body>

</html>
