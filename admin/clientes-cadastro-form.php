<?php include "includes/header.php"; ?>

<form action="clientes-cadastro.php" method="post">
    <h2>Cadastro de Cliente</h2>
    
    <div>
        <label>Nome:</label>
        <input type="text" name="cliente" required>
    </div>
    
    <div>
        <label>Cidade:</label>
        <input type="text" name="cidade" required>
    </div>
    
    <div>
        <label>Estado:</label>
        <input type="text" name="estado" required>
    </div>
    
    <div class="text-right mt-20">
        <a href="clientes-admin.php">Cancelar</a>
        <button type="submit">Cadastrar</button>
    </div>
</form>

<?php include "includes/footer.php"; ?>