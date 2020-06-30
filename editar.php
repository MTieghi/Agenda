<?php
        session_start();
        include_once('conexao.php');
        $id = $_GET['usuario'];
        $result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Editar</title>
    <link rel="stylesheet" href="css/form.css" />
    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
    <script src="https://bossanova.uk/jsuites/v3/jsuites.js"></script>
</head>
<body>
    <section>
        <header>Editar Contato</header>
        <div id="formu">
            <!--------Formulario--------->
            <form method="post" action="edit.php">
                <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>" /> 
                <p><input type="text" placeholder="Nome Completo" name="nome" required value="<?php echo $row_usuario['nome']; ?>" /></p>
                <p><input type="text" class="phone" placeholder="Telefone" name="telefone" required value="<?php echo $row_usuario['telefone']; ?>" /></p>
                <p><input type="text" placeholder="Data de Nascimento" name="nascimento" data-mask="dd/mm/yyyy" value="<?php echo $row_usuario['nascimento']; ?>" /></p>
                <p><input type="email" placeholder="E-mail" name="email" value="<?php echo $row_usuario['email']; ?>" /></p>
                <p><input type="text" placeholder="Num, Rua, Bairro" id="end" name="endereco" value="<?php echo $row_usuario['endereco']; ?>" /></p>
                <p><input type="submit" name="salvar" value="Editar" /></p>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy;MarceloTieghi</p>
    </footer>
    <script>  
        var behavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
        };

        $('.phone').mask(behavior, options);
    </script>
</body>
</html>