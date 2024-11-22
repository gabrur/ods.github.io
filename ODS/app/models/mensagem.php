<?php 


require('..\..\..\ODS\config\conexão.php');

$mensagem3 = "Bem vindo(a)!";
$mensagem2 = "Seja bem vindo ";
$mensagem1 = "Seja bem vindo administrador(a)!";



if (isset($_SESSION['grupo_id'])) {
    // Verifica se a mensagem já foi exibida
    if (!isset($_SESSION['mensagem_exibida']) || time() - $_SESSION['mensagem_exibida'] > 86400) {
if ($_SESSION['grupo_id'] == 3) {
    echo '<div class="mensagem">'. $mensagem3. '</div>';
} elseif ($_SESSION['grupo_id'] == 2) {
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : 'usuário';
  echo '<div class="mensagem">'. $mensagem2 . $nome. '</div>';
} elseif ($_SESSION['grupo_id'] == 1) {
  echo '<div class="mensagem">'. $mensagem1 . '</div>';
}
    }}
   

    $_SESSION['mensagem_exibida'] = time();
?>

<script>
    // Tempo em milissegundos para a duração total
    const tempoLimite = 3000;
    const mensagem = document.querySelector('.mensagem');

    // Verifica se a mensagem existe antes de aplicar a animação
    if (mensagem) {
        const textoOriginal = mensagem.textContent; // Armazena o texto original
        mensagem.textContent = ""; // Limpa a mensagem para digitar letra por letra

        let index = 0;
        const intervalo = setInterval(() => {
            if (index < textoOriginal.length) {
                mensagem.textContent += textoOriginal.charAt(index); // Adiciona uma letra
                index++;
            } else {
                clearInterval(intervalo); // Para o intervalo quando o texto estiver completo

                // Começa a desaparecer letra por letra após um tempo
                setTimeout(() => {
                    let fadeOutIndex = textoOriginal.length - 1;
                    const fadeOutInterval = setInterval(() => {
                        if (fadeOutIndex >= 0) {
                            mensagem.textContent = textoOriginal.slice(0, fadeOutIndex); // Remove a última letra
                            fadeOutIndex--;
                        } else {
                            clearInterval(fadeOutInterval); // Para o intervalo quando todas as letras desaparecerem
                            mensagem.style.display = 'none'; // Remove do fluxo
                        }
                    }, 100); // Tempo entre cada letra (100 ms)
                }, tempoLimite); // Espera 3 segundos antes de iniciar o fade out
            }
        }, 100); // Tempo entre cada letra (100 ms)
    }
</script>