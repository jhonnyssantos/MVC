<!DOCTYPE HTML>
<html>
<?php include("head2.php") ?>

<body>
    <?php include("menu2.php") ?>
    <div class="row">
        <form method="post" action="../controller2/ControllerCadastro2.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="marca" name="marca" placeholder="Marca do Veículo" required autofocus>
                <input class="form-control" type="text" id="modelo" name="modelo" placeholder="Modelo do Veículo" required>
                <input class="form-control" type="number" id="ano" name="ano" placeholder="Ano do Veículo" required>
                <input class="form-control" type="text" id="cor" name="cor" placeholder="Cor do Veículo" required>
                <input class="form-control" type="number" id="preco" name="preco" placeholder="Preço do Veículo" onkeypress="formatarMoeda();" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">
        function formatarMoeda() {
            var elemento = document.getElementById('preco');
            var valor = preco.value;

            valor = valor + '';
            valor = parseInt(valor.replace(/[\D]+/g, ''));
            valor = valor + '';
            valor = valor.replace(/([0-9]{2})$/g, ",$1");

            if (valor.length > 6) {
                valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
            }

            elemento.value = valor;
        }



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
