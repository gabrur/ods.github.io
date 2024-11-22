<?php
include '..\..\..\ODS\config\conexão.php';
include '..\..\..\ODS\config\protect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Consulta para deletar o usuário
    $sql = "DELETE FROM tb_usuarios WHERE id = $id";
    if ($mysqli->query($sql) === TRUE) {
        echo "Usuário deletado com sucesso!";
    } else {
        echo "Erro ao deletar usuário: " . $mysqli->error;
    }
}

header('Location: admin.php');
exit;
?>
