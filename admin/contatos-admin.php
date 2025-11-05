<?php
    require "config.inc.php";
    include "includes/header.php";
?>

<div class="text-right">
    <a href="contatos-cadastro-form.php">Cadastrar Contato</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM contatos";
        $resultado = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$dados['nome']."</td>";
            echo "<td>".$dados['numero']."</td>";
            echo "<td>".$dados['email']."</td>";
            echo "<td>";
            echo "<a href='contatos-altera-form.php?id=".$dados['id']."'>Alterar</a> ";
            echo "<a href='contatos-excluir.php?id=".$dados['id']."' onclick='return confirm(\"Confirmar exclusão?\")'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include "includes/footer.php"; ?>