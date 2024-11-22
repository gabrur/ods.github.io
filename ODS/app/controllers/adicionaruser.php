<?php
include '..\..\..\ODS\config\conexão.php';
include '..\..\..\ODS\config\protect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $grupo_id = $_POST['grupo_id'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha

    $sql = "INSERT INTO tb_usuarios (nome, email, senha, grupo_id) VALUES ('$nome', '$email', '$senha', '$grupo_id')";
    if ($mysqli->query($sql) === TRUE) {
        echo "Usuário adicionado com sucesso!";
        header('Location: admin.php');
        exit;
    } else {
        echo "Erro ao adicionar usuário: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
</head>
<body>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        Grupo:
        <select name="grupo_id">
            <option value="1">Admin</option>
            <option value="2">Usuario</option>
            <option value="3">Convidado</option>
        </select><br>
        <button type="submit">Adicionar Usuário</button>
    </form>
</body>
</html>
