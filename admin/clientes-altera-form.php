<?php
    require "config.inc.php";
    include "includes/header.php";

    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_array($resultado);
?>

<form action="clientes-altera.php" method="post">
    <h2>Alteração de Cliente</h2>
    
    <input type="hidden" name="id" value="<?=$dados['id']?>">
    
    <div>
        <label>Nome:</label>
        <input type="text" name="cliente" value="<?=$dados['cliente']?>" required>
    </div>
    
    <div>
        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?=$dados['cidade']?>" required>
    </div>
    
    <div>
        <label>Estado:</label>
        <input type="text" name="estado" value="<?=$dados['estado']?>" required>
    </div>
    
    <div class="text-right mt-20">
        <a href="clientes-admin.php">Cancelar</a>
        <button type="submit">Salvar Alterações</button>
    </div>
</form>

<?php
} else {
    echo "<div class='mt-20'>";
    echo "<h2>Nenhum cliente encontrado</h2>";
    echo "<p><a href='clientes-admin.php'>Voltar para lista</a></p>";
    echo "</div>";
}

include "includes/footer.php";
?>


