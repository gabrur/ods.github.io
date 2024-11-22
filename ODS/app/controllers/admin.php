<?php include '..\..\..\ODS\config\conexão.php'; 
    include '..\..\..\ODS\config\protect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Gerenciamento de Usuários</h2>

    <!-- Botão para adicionar novos usuários -->
    <button onclick="window.location.href='adicionaruser.php'">Adicionar Usuário</button>

    <!-- Tabela para listar usuários -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Grupo</th>
            <th>Ações</th>
        </tr>

        <?php
        // Consulta para obter todos os usuários
        $sql = "SELECT u.id, u.nome, u.email, g.nome AS grupo 
                FROM tb_usuarios u
                JOIN tb_grupos g ON u.grupo_id = g.id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['grupo']}</td>
                        <td>
                            <a href='editaruser.php?id={$row['id']}'>Editar</a> | 
                            <a href='deleteuser.php?id={$row['id']}' onclick='return confirm(\"Tem certeza?\")'>Deletar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
        }
        ?>
    </table>
    Voltar para a <a href="..\..\..\ODS\app\view\index.php">página principal</a>
</body>
</html>
