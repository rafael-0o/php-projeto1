<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM contatos WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados["nome"];
            $numero = $dados["numero"];
            $email = $dados["email"];
            $id = $dados["id"];
        }

?>
<h2>Alteração de dados do contato</h2>
<form action="?pg=contatos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>" required><br>
    <label>Numero:</label>
    <input type="number" name="numero" value="<?=$numero?>" required><br>
    <label>Email:</label>
    <input type="text" name="email" value="<?=$email?>"><br><br>
    <input type="submit" value="Cadastrar">
</form>
<?php
}else{
        echo "<br><h2>Nenhum contato encontrado</h2>";
    }
?>

