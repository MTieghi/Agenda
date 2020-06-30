<?php
    session_start();
    include_once("conexao.php");
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$nascimento = $_POST['nascimento'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];

    $result_usuario = "UPDATE usuarios SET id='$id', nome='$nome', telefone='$telefone', nascimento='$nascimento', email='$email', endereco='$endereco' WHERE id='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Editando</title>
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
				if(mysqli_affected_rows($conexao)) {
					print "<h1>Contato Atualizado!</h1>";
					print "<div><a href='index.php'><button>Agenda</button></a><div>";
				} else {
					print "<h1>Contato não atualizado!<br />Verifique os dados novamente!</h1>";
					print "<div><a href='editar.php?id=$id'><button>Voltar</button></a><div>";
				}
			?>
		</section>
	<footer>
		<p>&copy;MarceloTieghi</p>
    </footer>
	</body>
</html>

