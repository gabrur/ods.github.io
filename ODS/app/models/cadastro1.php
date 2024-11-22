<?php
if (isset($_POST['submit'])) {
    include_once('..\..\..\ODS\config\conexão.php');

    $erro = false;
    $mensagemErro = '';

    // Verifica se a senha e a confirmação de senha são iguais
    if ($_POST["senha"] === $_POST["confsenha"]) {
        
        // Protege contra SQL Injection
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST["email"]);
        $senha = $_POST["senha"];  // Senha em texto claro
        
        $grupo_id = 2;

        // Validações
        if (!preg_match('/^[\p{L}\s]+$/u', $nome) || strlen($nome) > 50) {
            $erro = true;
            $mensagemErro .= "O nome deve conter apenas letras e espaços e ter no máximo 50 caracteres!<br>";
        }

        // Validação personalizada para aceitar uma lista maior de domínios
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com|icloud\.com|live\.com|aol\.com|mail\.com|zoho\.com|protonmail\.com|ifrr\.edu\.br|ufrj\.br|ufmg\.br|usp\.br|unicamp\.br|harvard\.edu|mit\.edu|ox\.ac\.uk|cam\.ac\.uk)$/', $email)) {
            $erro = true;
            $mensagemErro .= "Formato de e-mail inválido ou domínio não permitido<br>";
        }

        if (strlen($senha) < 8 || strlen($senha) > 12) {
            $erro = true;
            $mensagemErro .= "A senha deve ter entre 8 e 12 caracteres!<br>";
        }

        // Se houver erro, exibe a mensagem e não insere no banco de dados
        if ($erro) {
            echo $mensagemErro;
        } else {
            // Criptografa a senha antes de armazenar
            $senha_segura = password_hash($senha, PASSWORD_DEFAULT);

            // Insere os dados na tabela
            $sql = "INSERT INTO tb_usuarios (nome, email, senha, grupo_id) VALUES ('$nome', '$email', '$senha_segura', '$grupo_id')";
            if (mysqli_query($mysqli, $sql)) {
                echo "Usuário cadastrado com sucesso!";
                header('Location: login.php');
                exit();
            } else {
                echo "Erro ao cadastrar o usuário: " . mysqli_error($mysqli);
            }
        }
    } else {
        echo "As senhas não coincidem!";
    }
}
?>
