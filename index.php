<?php
    include_once('conexao.php');

    $sqltudo = "select * from usuarios";
    $contudo = $conexao->query($sqltudo) or die ($conexao->error); 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Agenda Tel</title>
        <style>
            body {
                background: rgba(128, 128, 128, 0.55);
                font: normal 1.3em arial;
            }
            section {
                width: 90%;
                margin: auto;
                padding-bottom: 30px;
                background: rgba(19, 63, 130, 0.60);
                box-shadow: 3px 3px 9px rgba(0,0,0,.5);
                border-radius: 20px;
            }
            /*=====Cabeçalho====*/
            header {
                color: white;
                text-align: center;
                font: bold 2em arial;
                text-shadow: 7px 7px black;
            }
            /*=====DIV Contato====*/
            #contato {
                width: 500px;
                display: flex;
                flex-direction: row;
                align-items: center;
                margin: auto;
                padding: 0px 20px;
            }
            #btncontato {
                display: inline-block;
                list-style: none;
                width: 300px;
                padding: 10px;
                margin: 30px auto;
                text-align: center;
                background: rgba(128, 128, 128, 0.94);
                color: white;
                box-shadow: 3px 3px 9px black;
            }
                #btncontato a {
                    color: white;
                }
            /*=====DIV Detalhes======*/
            #detalhes {
                width: fit-content;
                height: auto;
                background: white;
                border: 1px solid black;
                margin: auto;
                text-align: center;
                box-shadow: 3px 3px 9px rgba(0,0,0,.5);
                border-radius: 10px;
            }
            /*======Tabela======*/
            #tabela {
                border-collapse: collapse;
            }
                #tabela tr td {
                    border: 1px solid black;
                    text-align: center;
                    font: normal 15px arial;
                    padding: 15px 18px;                    
                }
                #tabela tr th {
                    border-right: 1px solid black;
                    text-align: center;
                    padding: 5px;
                }
                #tabela th {
                    text-shadow: 3px 3px 10px;
                }
                a {
                    color: black;
                    text-decoration: none;
                }
                    a:hover {
                        text-decoration: underline;
                        background: rgba(128, 128, 128, 0.94);
                        color: white;
                        padding: 5px;
                    }
            /*=====Rodape=====*/
            footer {
                text-align: center;
                font: bold 1em arial;
                color: white;
            }
        </style>
    </head>
    <body>
        <section>
            <header>Agenda Telefônica</header>
            <div id="contato">
                <!--Cadastrando um contato-->
                    <p id="btncontato"><a href="form.html">Cadastrar um novo contato!</a></p> 
            </div>
            <!--DIV com os dados dos contatos-->
            <div id="detalhes">
               <table id="tabela">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Nasc.</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th></th>
                    </tr>
                    <?php 
                    while($dados = $contudo->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dados["nome"];?></td>
                        <td><?php echo $dados["telefone"];?></td>
                        <td><?php echo $dados["nascimento"];?></td>
                        <td><?php echo $dados["email"];?></td>
                        <td><?php echo $dados['endereco'];?></td>
                        <td>
                        <a href="javascript: if(confirm('Deseja atualizar o contato  <?php echo $dados["nome"];?> ?')) location.href='editar.php?p=editar&usuario=<?php echo $dados['id'];?>'">Editar</a> | 
                            <a href="javascript: if(confirm('Tem certeza que dejesa deletar o contato <?php echo $dados["nome"]; ?> ?')) location.href='delete.php?p=delete&usuario=<?php echo $dados['nome'];?>'">Excluir</a>
                        </td>
                    </tr>
                   <?php  } ?>                
                </table>
            </div>
        </section>
    <footer>
        <p>&copy;MarceloTieghi</p>
    </footer>
    </body>
</html>