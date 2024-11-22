<?php if (isset($_POST['botao'])) {
    
    executarFuncao();
}
function executarFuncao() {
    session_destroy();
    header( "Location: login.php");
    exit();

}
?>