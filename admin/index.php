<?php
echo "Painel administrativo";
?>

<?php
// Conteúdo
if(empty($_SERVER["QUERY_STRING"])){
    $var = "principal";
    include_once "$var.php";
}elseif($_GET['pg']){
    $pg = $_GET['pg'];
    include_once "$pg.php";
}else{
    echo "Página não encontrada";
}
?>
