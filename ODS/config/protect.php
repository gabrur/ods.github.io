<?php

// Inicia a sessão
session_start();
include '..\..\..\ODS\config\conexão.php'; 

// Verifica se o usuário está logado e se o ID é igual a 1
if (!isset($_SESSION['grupo_id']) || $_SESSION['grupo_id'] != 1) {
    // Redireciona para uma página de erro ou página inicial
    echo "Você não tem acesso a essa página"; // Ou qualquer página que desejar
    exit();
}

// O conteúdo da página protegida vai abaixo
?>

