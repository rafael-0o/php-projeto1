<?php

    require "config.inc.php";

    echo "<p><a href='?pg=contatos-cadastro-form'>Cadastrar Contato</a></p>";
    echo "<h2>Lista de Contatos</h2>";

    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)){
        echo "Id: ".$dados['id']." | ";
        echo "Nome: ".$dados['nome']." | ";
        echo "Numero: ".$dados['numero']." | ";
        echo "Email: ".$dados['email']." | ";
        echo " | <a href='?pg=contatos-altera-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=contatos-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }