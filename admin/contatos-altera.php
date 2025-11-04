<?php
    require_once 'config.inc.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    $sql = "UPDATE contatos SET nome = '$nome',numero = '$numero',
            email = '$email'
            WHERE id = '$id'";


    if($resultado = mysqli_query($conexao, $sql)){
        echo "<br><h2>Contato alterado com sucesso!";
        echo "<a href='?pg=contatos-admin'>Voltar</a>";
    }else{
        echo "<br><h3>Erro ao alterar cliente</h3>";
        echo "<a href='?pg=contatos-admin'>Voltar</a>";
    }


