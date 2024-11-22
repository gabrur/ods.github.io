<?php
session_start();
require('..\..\..\ODS\config\conexão.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];  // Senha em texto claro

    // Validação de e-mail com domínios específicos
    $regex_email = "/^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com|icloud\.com|live\.com|aol\.com|mail\.com|zoho\.com|protonmail\.com|ifrr\.edu\.br|ufrj\.br|ufmg\.br|usp\.br|unicamp\.br|harvard\.edu|mit\.edu|ox\.ac\.uk|cam\.ac\.uk)$/";
    
    if (preg_match($regex_email, $email)) {

        // Usando prepared statements para prevenir SQL Injection
        $sql_code = "SELECT * FROM tb_usuarios WHERE email = ?";
        $stmt = $mysqli->prepare($sql_code);
        $stmt->bind_param("s", $email); // "s" para string
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows == 1) {
            $usuario = $result->fetch_assoc();

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
        echo "Formato de e-mail inválido ou domínio não permitido.";
    }
}
?>
