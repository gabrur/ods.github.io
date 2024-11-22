<?php
session_start();
  include ('..\..\..\ODS\app\controllers\Usuários.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="animaheader.js" type="text/javascript" defer></script>
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="termos2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
      <link rel="icon" href="https://i.imgur.com/sQ7EDJT.png" alt="Icone do nosso projeto sobre ODS">
      <title>Termos de Uso</title>
   </head>


    <body>
        <header id="header">
            <nav class="navbar">    
                <div class="logo">
                 <a href="sobrenos.php"><span class="material-symbols-outlined">groups</span>LMGV</a>
                </div>

                <div class="logout" id="logout-button">
                 <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 2 || $_SESSION['grupo_id'] == 1)):  ?><!-- Botão de sair apenas para usuários logados -->
                    <form action="" method="POST">
                      <button type="submit" name="botao" class="butao-sair">
                         Sair
                         <svg class="material-symbols-outlined" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                     </button>
                    </form>
                    <?php endif; ?>
                </div>

                <div id="entrarr" class="menu">
                    <?php if (!isset($_SESSION['id']) || $_SESSION['grupo_id'] == 3): ?> <!-- Link de entrar apenas para convidados -->
                    <a  class="butao-login" href="login.php">Entrar<svg class="material-symbols-outlined" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/></svg></a>
                    <?php endif; ?>
                </div>
                <img id="log"src="https://i.imgur.com/sQ7EDJT.png">
            </nav>
        </header>
        
        <main class="corpo">
            <div class="caixater">
                <div class="termos">
                    <h2><span style="color: rgb(68, 68, 68);">1. Termos</span></h2><br><p><span style="color: rgb(68, 68, 68);">Ao acessar ao site <a href="index.php">O que é ODS</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</span></p><br><br><h2><span style="color: rgb(68, 68, 68);">2. Uso de Licença</span></h2><br><p><span style="color: rgb(68, 68, 68);">É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site O que é ODS , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode:&nbsp;</span></p><br><ol><li><span style="color: rgb(68, 68, 68);">modificar ou copiar os materiais;&nbsp;</span></li><li><span style="color: rgb(68, 68, 68);">usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);&nbsp;</span></li><li><span style="color: rgb(68, 68, 68);">tentar descompilar ou fazer engenharia reversa de qualquer software contido no site O que é ODS;&nbsp;</span></li><li><span style="color: rgb(68, 68, 68);">remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou&nbsp;</span></li><li><span style="color: rgb(68, 68, 68);">transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</span></li></ol><br><p><span style="color: rgb(68, 68, 68);">Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por O que é ODS a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</span></p><br><br><h2><span style="color: rgb(68, 68, 68);">3. Isenção de responsabilidade</span></h2><br><ol><li><span style="color: rgb(68, 68, 68);">Os materiais no site da O que é ODS são fornecidos 'como estão'. O que é ODS não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</span></li><li><span style="color: rgb(68, 68, 68);">Além disso, o O que é ODS não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</span></li></ol><br><br><h2><span style="color: rgb(68, 68, 68);">4. Limitações</span></h2><br><p><span style="color: rgb(68, 68, 68);">Em nenhum caso o O que é ODS ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em O que é ODS, mesmo que O que é ODS ou um representante autorizado da O que é ODS tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</span></p><br><br><h2><span style="color: rgb(68, 68, 68);">5. Precisão dos materiais</span></h2><br><p><span style="color: rgb(68, 68, 68);">Os materiais exibidos no site da O que é ODS podem incluir erros técnicos, tipográficos ou fotográficos. O que é ODS não garante que qualquer material em seu site seja preciso, completo ou atual. O que é ODS pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, O que é ODS não se compromete a atualizar os materiais.</span></p><br><br><h2><span style="color: rgb(68, 68, 68);">6. Links</span></h2><br><p><span style="color: rgb(68, 68, 68);">O O que é ODS não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por O que é ODS do site. O uso de qualquer site vinculado é por conta e risco do usuário.</span></p><p><br></p><h3><span style="color: rgb(68, 68, 68);">Modificações</span></h3><p><span style="color: rgb(68, 68, 68);">O O que é ODS pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</span></p><br><h3><span style="color: rgb(68, 68, 68);">Lei aplicável</span></h3><p><span style="color: rgb(68, 68, 68);">Estes termos e condições são regidos e interpretados de acordo com as leis do O que é ODS e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</span></p>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-tudo">
                <div class="footer-conteudo">
                    <div class="footer-links">
                        <?php if (isset($_SESSION['grupo_id']) && ($_SESSION['grupo_id'] == 1)): ?>
                        <a href="..\..\..\ODS\app\controllers\admin.php">admin page</a>
                        <?php endif; ?>
                        <a href="politica.php">Politica de Privacidade</a>
                        <a href="sobrenos.php">Sobre</a>
                        <a href="contato.php">Contato</m>
                        <a href="termos.php">Termos de Uso</a>
                    </div>

                    <div class="redes">
                        <a id="faceb" href="https://facebook.com" target="_blank">
                            <i class="fa-brands fa-facebook"></i> 
                        </a>
                        <a id="insta" href="https://instagram.com" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a id="xtwi" href="https://twitter.com" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <p>&copy; 2024 ODS Website. Todos os direitos reservados.</p>
            </div>
        </footer>
   </body>



</html>