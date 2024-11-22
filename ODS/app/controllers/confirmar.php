<?php
include_once('..\..\..\ODS\config\conexão.php');

if (isset($_GET['codigo'])) {
    $codigo_confirmacao = $_GET['codigo'];

    // Verifica se o código de confirmação existe na base de dados
    $sql = "SELECT * FROM tb_usuarios WHERE codigo_confirmacao = '$codigo_confirmacao' AND confirmado = 0";
    $resultado = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        // Marca o usuário como confirmado
        $sql_confirmar = "UPDATE tb_usuarios SET confirmado = 1 WHERE codigo_confirmacao = '$codigo_confirmacao'";
        if (mysqli_query($mysqli, $sql_confirmar)) {
            echo "Cadastro confirmado com sucesso! Agora você pode fazer login.";
        } else {
            echo "Erro ao confirmar o cadastro. Tente novamente.";
        }
    } else {
        echo "Código de confirmação inválido ou já utilizado.";
    }
} else {
    echo "Código de confirmação não fornecido.";
}
?>
