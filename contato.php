<?php
	include_once("conexao.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$nascimento = $_POST['nascimento'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];

	$sql = "insert into usuarios (id, nome, telefone, nascimento, email, endereco) values ('$id', '$nome', '$telefone', '$nascimento', '$email', '$endereco')";

    $salvar = mysqli_query($conexao, $sql);
    $linha = mysqli_affected_rows($conexao);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Resultado</title>
		<meta charset="utf-8" />
		<style>
			body {
				background: rgba(128, 128, 128, 0.55);
				font: normal 1.3em arial;
			}
			section {
				background: rgba(19, 63, 130, 0.60);
				width: 510px;
				height: auto;
				box-shadow: 3px 3px 10px black;
				margin: auto;
				margin-top: 17%;
				padding-top: 10px;
				padding-bottom: 10px;
				border-radius: 20PX;
			}
			div {
				margin: auto;
				width: 75px;
			}
				section h1{
					color: white;
					text-align: center;
				}
				section button{
					color: #cecece;
					background: rgba(128, 128, 128, 0.55);
					box-shadow: rgba(0, 0, 0, .5);
					width: 70px;
					height: 50px;
					margin: auto;
					margin-bottom: 10px;
				}
		footer {
			text-align: center;
			font: bold 1em arial;
			color: white;
		}
		</style>
	</head>
	<body>
		<section>
			<?php
				if($linha == 1) {
					print "<h1>Cadastro Efetuado!</h1>";
					print "<div><a href='index.php'><button>Agenda</button></a><div>";
				} else {
					print "<h1>Cadastro não efetuado!<br />Verifique os dados novamente!</h1>";
					print "<div><a href='form.html'><button>Voltar</button></a><div>";
				}
			?>
		</section>
	<footer>
		<p>&copy;MarceloTieghi</p>
    </footer>
	</body>
</html>