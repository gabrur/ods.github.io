<?php

session_start(); // Inicia a sessão

// Verifica se a sessão 'nome' não está definida, mas o cookie 'usuario' existe



$nivel_acesso = $_SESSION['grupo_id'];

$duracao = time() + (12 * 60 * 60); 

setcookie("usuario", $nivel_acesso, $duracao, "/");

if (isset($_SESSION['grupo_id']) && isset($_COOKIE['nivel_acesso'])) {
    // Recria a sessão a partir do cookie
    $_SESSION['grupo_id'] = $_COOKIE['nivel_acesso'];
}
?>
