<?php
    require "config.inc.php";
    include "includes/header.php";
?>

<div class="text-right">
    <a href="clientes-cadastro-form.php">Cadastrar Cliente</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$dados['cliente']."</td>";
            echo "<td>".$dados['cidade']."</td>";
            echo "<td>".$dados['estado']."</td>";
            echo "<td>";
            echo "<a href='clientes-altera-form.php?id=".$dados['id']."'>Alterar</a> ";
            echo "<a href='clientes-excluir.php?id=".$dados['id']."' onclick='return confirm(\"Confirmar exclusão?\")'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include "includes/footer.php"; ?>