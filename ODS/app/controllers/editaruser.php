<?php

include '..\..\..\ODS\config\conexão.php';
include '..\..\..\ODS\config\protect.php';

$user = null; // Inicializar a variável para evitar avisos

// Verificar se o ID foi passado pela URL e é um número inteiro válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Consulta para buscar o usuário com base no ID
    $sql = "SELECT * FROM tb_usuarios WHERE id = $id";
    $result = $mysqli->query($sql);
    
    // Verificar se a consulta retornou um resultado
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "<p>Usuário não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>ID do usuário não fornecido ou inválido!</p>";
    exit;
}

// Atualizar os dados do usuário se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $grupo_id = $_POST['grupo_id'];

    // Verificar se uma nova senha foi inserida
    if (!empty($_POST['senha'])) {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha
        $sql = "UPDATE tb_usuarios SET nome='$nome', email='$email', grupo_id='$grupo_id', senha='$senha' WHERE id=$id";
    } else {
        $sql = "UPDATE tb_usuarios SET nome='$nome', email='$email', grupo_id='$grupo_id' WHERE id=$id";
    }

    if ($mysqli->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Erro ao atualizar: " . $mysqli->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <?php if ($user): ?>
        <form method="POST">
            Nome: <input type="text" name="nome" value="<?php echo $user['nome']; ?>" required><br>
            Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
            Senha: <input type="password" name="senha" placeholder="Deixe em branco para não alterar"><br>
            Grupo:
            <select name="grupo_id">
                <option value="1" <?php if ($user['grupo_id'] == 1) echo 'selected'; ?>>Admin</option>
                <option value="2" <?php if ($user['grupo_id'] == 2) echo 'selected'; ?>>Usuario</option>
                <option value="3" <?php if ($user['grupo_id'] == 3) echo 'selected'; ?>>Convidado</option>
            </select><br>
            <button type="submit">Salvar Alterações</button>
        </form>
    <?php endif; ?>
</body>
</html>
