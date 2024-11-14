<?php
session_start();
require('..\..\..\ODS\config\conexão.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];  // Senha em texto claro

    // Validação de e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) <= 100) {
        
        // Consulta para localizar o usuário pelo email
        $sql_code = "SELECT * FROM tb_usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code);

        if ($sql_query && $sql_query->num_rows == 1) {
            $usuario = $sql_query->fetch_assoc();

            // Comparação entre a senha fornecida e o hash no banco
            if (password_verify($senha, $usuario['senha'])) {
                // Senha correta, faz login
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['grupo_id'] = $usuario['grupo_id'];

                header("Location: index.php");
                exit();
            } else {
                echo "E-mail ou senha incorretos!";
            }
        } else {
            echo "E-mail não encontrado!";
        }
    } else {
        echo "Formato de e-mail inválido.";
    }
}
?>
