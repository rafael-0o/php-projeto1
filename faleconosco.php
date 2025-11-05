<?php
    echo "<h3>Fale Conosco</h3>";
    echo "<p>Nosso contato para você poder falar conosco e tirar alguma dúvida pendente.</p>";?>
<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        echo "<h3>Nossos contatos</h3>";
        while($dados = mysqli_fetch_array($resultado)){
            echo "<p>Nome: $dados[nome]</p>";
            echo "<p>Numero: $dados[numero]</p>";
            echo "<p>Email: $dados[email]</p>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum Contato cadastrado.</h3>";
    }


