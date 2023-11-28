<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Cliente" required autofocus>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email do CLiente" required>
                <input class="form-control" type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
                <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço do Ciente" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar Cliente</button>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">

        function validar(formulario) {
            var telefone = form.quantidade.value;
            var endereco = form.endereco.value;
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
            if (endereco <= 0) {
                alert('O endereço não pode ser igual ou infeiror a 0');
                form.endereco.focus();
                return false;
            }
            formulario.submit();
        }

    </script>
</body>

</html>
