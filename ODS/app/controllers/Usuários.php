<?php


require ('..\..\..\ODS\config\logout.php');
require('..\..\..\ODS\config\conexão.php');


// Verifica se o usuário está logado e define como "convidado" se não estiver
if (!isset($_SESSION['id'])) {
    if (!isset($_SESSION['grupo_id'])) {
        $_SESSION['grupo_id'] = 3; // 3 representa o grupo "convidado"
 
    }
}


?>
