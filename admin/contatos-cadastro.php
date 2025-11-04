<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $numero = $_POST["numero"];
        $email = $_POST["email"];
    }else{
        echo "<H2>Envio de dados não permitido</H2>";
    }

    $sql = "INSERT INTO contatos (nome, numero, email)
            VALUES ('$nome', '$numero', '$email')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
        echo "<H2>Cadastrado com sucesso</H2>";
        echo "<a href='?pg=contatos-admin'>Voltar</a>";
    }else{
        echo "Cadastro não realizado.";
    }


