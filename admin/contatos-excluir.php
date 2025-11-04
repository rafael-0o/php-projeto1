<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM contatos WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<br><h2>Contato Excluído com sucesso.</h2>";
        echo "<a href='?pg=contatos-admin'>Voltar</a>";
    }else{
        echo "<br><h2>Erro ao excluir Contato.</h2>";
        echo "<a href='?pg=contatos-admin'>Voltar</a>";
    }