<?php
    include_once("conexao.php");

    $nome = $_GET['usuario'];

    $sql_code = "DELETE FROM usuarios WHERE nome='$nome'";
    $sql_query = $conexao->query($sql_code) or die ($conexao->error);

    header("location:index.php");
?>